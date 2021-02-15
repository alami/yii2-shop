<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shop_brands}}`.
 */
class m210215_080352_create_shop_brands_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop_brands}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'meta_json' => 'LONGTEXT',//'JSON NOT NULL',
        ]);
        $this->createIndex('{{%idx-shop_brands-slug}}', '{{%shop_brands}}', 'slug', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shop_brands}}');
    }
}
