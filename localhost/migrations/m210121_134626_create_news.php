<?php

use yii\db\Migration;

/**
 * Class m210121_134626_create_news
 */
class m210121_134626_create_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id'=>$this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'date'=>$this->date(),
            'image'=>$this->string(),
            'user_id'=>$this->integer()
        ] );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210121_134626_create_news cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210121_134626_create_news cannot be reverted.\n";

        return false;
    }
    */
}
