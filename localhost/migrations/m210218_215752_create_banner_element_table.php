<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banner_element}}`.
 */
class m210218_215752_create_banner_element_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banner_element}}', [
            'id'=>$this->primaryKey(),
            'title'=>$this->string(),
            'link'=>$this->string(),
            'type'=>$this->string(),
            'banner_id'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%banner_element}}');
    }
}
