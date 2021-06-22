<?php

namespace App\Models;

use App\Libraries\MySql;
use App\Libraries\QueryBuilder;
Use PDO;

class PagesModel extends Model
{
    // Name of the table
    protected $model = "pages";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields
        );
    }

    public function news($pageId)
    {
        $qb = new QueryBuilder();

        $qb->select(['content.id', 'content.title', 'content.content', 'content.friendly_name'])
            ->from('content')
            ->where('content.page_id', '=', $pageId)
            ->whereAnd('content.type_of_content', '=', "'news'");

        $sql = $qb->get();
        
        return MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);
    }

    public function content($pageId)
    {
        
    }

}

new PagesModel;