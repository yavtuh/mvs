<?php


namespace Core\traits;
use Core\Model;
use PDO;

trait QueryTrait
{
    use ConnectionTrait;
    static protected string|null $tableName = null;
    static protected string $query = "";

    public static function all()
    {
        $query = "SELECT * FROM " . static::$tableName;
        return static::connect()->query($query)->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public static function find(int $id)
    {
        $query = 'SELECT * FROM ' . static::$tableName . ' WHERE id = :id';

        $stmt = static::connect()->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchObject(static::class);
    }
    public static function findBy(string $column, $value)
    {
        $query = "SELECT * FROM " . static::$tableName . " WHERE {$column} = :{$column}";

        $query = static::connect()->prepare($query);
        $query->bindValue(":{$column}", $value);
        $query->execute();

        return $query->fetchObject(static::class);
    }

    public static function select(array $columns = ['*']): Model
    {
        static::$query = "";
        static::$query = "SELECT " . implode(',', $columns) . " FROM " . static::$tableName . " ";

        return new static();
    }

    public static function create(array $fields)
    {
        $vars = static::preparedQueryVars($fields);

        $query = 'INSERT INTO ' . static::$tableName . ' ('. $vars['keys'] .') VALUES (' . $vars['placeholders'] . ')';
        $query = static::connect()->prepare($query);

        foreach ($fields as $key => $value) {
            $query->bindValue(":{$key}", $value);

        }

        $query->execute();

        return (int)static::connect()->lastInsertId();
    }

    public function where(array $conditions)
    {
        $valueKey = array_key_last($conditions);
        $value = $conditions[$valueKey];
        unset($conditions[$valueKey]);

        static::$query .= 'WHERE ' . implode($conditions) . ' :value';

        $stmt = static::connect()->prepare(static::$query);
        $stmt->bindValue(':value', $value);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public function update($fields)
    {
        if (!isset($this->id)) {
            return $this;
        }

        $query = "UPDATE " . static::$tableName . ' SET ' . static::buildPlaceholders($fields) . " WHERE id=:id";

        $stmt = static::connect()->prepare($query);

        foreach ($fields as $key => $value) {
            $stmt->bindValue(":{$key}", $value);
        }

        $stmt->bindValue('id', $this->id, PDO::PARAM_INT);
        $stmt->execute();

        return static::find($this->id);
    }

    public static function delete(int $id) : bool
    {
        $query = 'DELETE FROM ' . static::$tableName . ' WHERE id = :id';
        $query = static::connect()->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();

        return true;
    }

    protected static function preparedQueryVars(array $fields): array
    {
        $keys = array_keys($fields);
        $placeholders = preg_filter('/^/', ':', $keys);

        return [
            'keys' => implode(', ', $keys),
            'placeholders' =>  implode(', ', $placeholders)
        ];
    }
    private static function buildPlaceholders(array $data): string
    {
        $ps = [];

        foreach ($data as $key => $value) {
            $ps[] = " {$key}=:{$key}";
        }

        return implode(', ', $ps);
    }

}