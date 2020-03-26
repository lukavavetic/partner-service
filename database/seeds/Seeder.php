<?php

use Illuminate\Database\Seeder as BaseSeeder;
use Illuminate\Config\Repository as Config;
use Illuminate\Filesystem\Filesystem as Filesystem;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Database\DatabaseManager as Database;
use Doctrine\ORM\EntityManager;

class Seeder extends BaseSeeder
{
    /**
     * The config instance
     *
     * @var \Illuminate\Config\Repository
     */
    protected $config;

    /**
     * The filesystem factory (storage) instance
     *
     * @var \Illuminate\Contracts\Filesystem\Factory
     */
    protected $storage;

    /**
     * The filesystem instance
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $fileSystem;

    /**
     * The database instance
     *
     * @var \Illuminate\Database\DatabaseManager
     */
    protected $database;

    /**
     * The entity manager instance
     *
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager;

    /**
     * The name of current active connection
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * Truncate data before inserting
     *
     * @var bool
     */
    protected $truncate = true;

    /**
     * Files to leave when cleaning directory
     *
     * @var array
     */
    protected $filesLeave = [
        '.gitignore', 'thumb'
    ];

    /**
     * Create new database seeder instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->config        = app(Config::class);
        $this->fileSystem    = app(Filesystem::class);
        $this->storage       = app(Storage::class);
        $this->database      = app(Database::class);
        $this->entityManager = app(EntityManager::class);

        $this->database->connection($this->connection)->statement('SET FOREIGN_KEY_CHECKS = 0');
    }

    /**
     * Destroy database seeder instance
     *
     * @return void
     */
    public function __destruct()
    {
        $this->database->statement('SET FOREIGN_KEY_CHECKS = 1');
    }

    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
