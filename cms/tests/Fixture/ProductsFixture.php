<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor ',
                'category_id' => 1,
                'created' => '2023-10-24 08:08:11',
                'modified' => '2023-10-24 08:08:11',
            ],
        ];
        parent::init();
    }
}
