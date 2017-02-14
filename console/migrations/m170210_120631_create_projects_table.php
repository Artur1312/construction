<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m170210_120631_create_projects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects');
    }
}
