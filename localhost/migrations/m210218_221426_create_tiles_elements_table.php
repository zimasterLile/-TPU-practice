<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tiles_elements}}`.
 */
class m210218_221426_create_tiles_elements_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tiles_elements}}', [
            'id'=>$this->primaryKey(),
            'tiles_id'=>$this->integer(),
            'title'=>$this->string(),
            'text'=>$this->text(),
            'hidden_text'=>$this->text(),
            'image_1'=>$this->string(),
            'animation_1'=>$this->string(),
            'image_2'=>$this->string(),
            'animation_2'=>$this->string(),
            'link'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tiles_elements}}');
    }
}
