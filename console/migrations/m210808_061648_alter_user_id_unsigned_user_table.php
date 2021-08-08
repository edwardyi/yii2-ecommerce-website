<?php

use yii\db\Migration;

/**
 * Class m210808_061648_alter_user_id_unsigned_user_table
 */
class m210808_061648_alter_user_id_unsigned_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%user}}', 'id', $this->integer(10)->unsigned());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%user}}', 'id', $this->integer(11));
    }
}
