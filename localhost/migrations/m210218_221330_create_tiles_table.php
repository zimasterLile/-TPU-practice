<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tiles}}`.
 */
class m210218_221330_create_tiles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tiles}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tiles}}');
    }
}
