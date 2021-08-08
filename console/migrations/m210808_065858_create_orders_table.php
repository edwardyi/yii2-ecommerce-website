<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210808_065858_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->integer(10)->unsigned(),
            'total_price' => $this->decimal(10, 2)->notNull(),
            'status' => $this->tinyInteger(1)->notNull(),
            'firstName' => $this->string(45)->notNull(),
            'lastName' => $this->string(45)->notNull(),
            'email' => $this->string(255)->notNull(),
            'transaction_id' => $this->string(45),
            'created_by' => $this->integer(10)->unsigned(),
            'updated_by' => $this->integer(10)->unsigned(),
        ]);

        $this->addPrimaryKey('pk-orders-id', '{{%orders%}}', 'id');

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-orders-created_by}}',
            '{{%orders}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-orders-created_by}}',
            '{{%orders}}',
            'created_by',
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
            '{{%fk-orders-created_by}}',
            '{{%orders}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-orders-created_by}}',
            '{{%orders}}'
        );

        $this->dropTable('{{%orders}}');
    }
}
