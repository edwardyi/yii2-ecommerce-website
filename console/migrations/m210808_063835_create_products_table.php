<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m210808_063835_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->integer(10)->unsigned(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->decimal(10, 2)->notNull(),
            'description' => "LONGTEXT",
            'image' => $this->string(200),
            'status' => $this->tinyInteger(1),
            'created_at' => $this->integer(10),
            'updated_at' => $this->integer(10),
            'created_by' => $this->integer(10)->unsigned(),
            'updated_by' => $this->integer(10)->unsigned(),
        ]);

        $this->addPrimaryKey('pk-products-id', '{{%products%}}', 'id');

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-products-created_by}}',
            '{{%products}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-products-created_by}}',
            '{{%products}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-products-updated_by}}',
            '{{%products}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-products-updated_by}}',
            '{{%products}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-products-created_by}}',
            '{{%products}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-products-created_by}}',
            '{{%products}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-products-updated_by}}',
            '{{%products}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-products-updated_by}}',
            '{{%products}}'
        );

        $this->dropTable('{{%products}}');
    }
}
