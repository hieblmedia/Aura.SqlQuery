<?php
namespace Aura\Sql\Query\Pgsql;

use Aura\Sql\Query\AbstractQuery;

class AbstractPgsql extends AbstractQuery
{
    /**
     * 
     * The prefix to use when quoting identifier names.
     * 
     * @var string
     * 
     */
    protected $quote_name_prefix = '"';

    /**
     * 
     * The suffix to use when quoting identifier names.
     * 
     * @var string
     * 
     */
    protected $quote_name_suffix = '"';
}