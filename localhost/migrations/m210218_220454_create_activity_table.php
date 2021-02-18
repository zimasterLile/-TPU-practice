<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activity}}`.
 */
class m210218_220454_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%activity}}', [
            'id'=>$this->primaryKey(),
            'title'=>$this->string(),
            'date'=>$this->date(),
            'date_event'=>$this->date(),
            'description'=>$this->string(),
            'text'=>$this->text(),
            'type_event'=>$this->string(),
            'access_event'=>$this->string(),
            'registration_required'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%activity}}');
    }
}
