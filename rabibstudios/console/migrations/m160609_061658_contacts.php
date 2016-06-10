<?php

use yii\db\Migration;

class m160609_061658_contacts extends Migration
{
  public function up()
  {
    $tableOptions = null;
    if($this->db->driverName === 'mysql')
    {
      $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    }
    $this->createTable('{{%contacts}}', [
        'id' => $this->primaryKey(),
        'name' => $this->string()->notNull(),
        'email' => $this->string()->notNull(),
        'comment' => $this->text()->notNull(),
        'creation_date' => $this->dateTime()->notNull(),
        'ip' => $this->string()->notNull(),
      ], $tableOptions);
  }

  public function down()
  {
    $this->dropTable('{{%contacts}}');
  }
}
