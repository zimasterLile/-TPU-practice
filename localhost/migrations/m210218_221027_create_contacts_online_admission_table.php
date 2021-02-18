<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts_online_admission}}`.
 */
class m210218_221027_create_contacts_online_admission_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts_online_admission}}', [
            'id'=>$this->primaryKey(),
            'fio'=>$this->string(),
            'telephone'=>$this->string(),
            'email'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts_online_admission}}');
    }
}
