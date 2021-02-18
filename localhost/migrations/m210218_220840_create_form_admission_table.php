<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%form_admission}}`.
 */
class m210218_220840_create_form_admission_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%form_admission}}', [
            'id'=>$this->primaryKey(),
            'title'=>$this->string(),
            'text'=>$this->text(),
            'question'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%form_admission}}');
    }
}
