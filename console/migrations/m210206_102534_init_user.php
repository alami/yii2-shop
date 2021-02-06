<?php

use yii\db\Migration;

/**
 * Class m210206_102534_init_user
 */
class m210206_102534_init_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->insert('{{%user}}', [
            'username' => '***',
            'auth_key' => 'CeuKm6qT-cARM7ywnDMbHvd8cMA6vAAA',
            'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('***'),
            'email' => 'shop@mail.uz',
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210206_102534_init_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210206_102534_init_user cannot be reverted.\n";

        return false;
    }
    */
}
