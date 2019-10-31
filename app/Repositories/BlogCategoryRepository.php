<?php


namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;


/**
 * Class BlogCategoryRepository
 * @package App\Repositories
 */
class BlogCategoryRepository extends CoreRepository
{
    /**
     * @return string
     */

    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Модель для редактирования в админке
     * @param $id
     * @return Model
     */

    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * Список категорий для вывода в выпадающем списке
     * @return Collection
     */
    public function getForComboBox()
    {
        return $this->startConditions()->all();
    }

}
