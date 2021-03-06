<?php
namespace Ideal\Structure\User\Admin;

use Ideal\Core\Db;

class ModelAbstract extends \Ideal\Core\Admin\Model
{

    public function delete()
    {
        parent::delete();
        $db = Db::getInstance();
        $db->delete($this->_table)->where('ID=:id', array('id' => $this->pageData['ID']))->exec();
        // TODO сделать проверку успешности удаления
        return 1;
    }

    public function detectPageByIds($path, $par)
    {
        $this->path = $path;
        return $this;
    }
}
