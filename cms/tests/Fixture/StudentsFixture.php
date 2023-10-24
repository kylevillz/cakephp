<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit a',
                'age' => 1.5,
                'country' => 'Lorem ipsum dolor sit a',
                'created_at' => '2023-10-24 07:41:07',
                'updated_at' => '2023-10-24 07:41:07',
            ],
        ];
        parent::init();
    }
}
