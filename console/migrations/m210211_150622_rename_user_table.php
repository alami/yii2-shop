<?php

use yii\db\Migration;

/**
 * Class m210211_150622_rename_user_table
 */
class m210211_150622_rename_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('{{%user}}', '{{%users}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameTable('{{%users}}', '{{%user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210211_150622_rename_user_table cannot be reverted.\n";

        return false;
    }
    */
}
