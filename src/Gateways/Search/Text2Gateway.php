<?php
/**
 * Created by PhpStorm.
 * User: tang
 * Date: 2023/08/07
 */

namespace Reprover\Amap\Gateways\Search;


use Reprover\Amap\Gateways\Gateway;
use Reprover\Amap\Results\SearchResult;

class Text2Gateway extends Gateway
{

    protected $uri="https://restapi.amap.com/v5/place/text";
    protected $rules=[
        "key"=>"required",
        "keywords"=>"switch",
        "types"=>"switch",
        "region"=>"nullable",
        "city_limit"=>"nullable",
        "show_fields"=>"nullable",
        "page_size"=>"nullable",
        "page_num"=>"nullable",
        "sig"=>"nullable",
        "output"=>"nullable",
        "callback"=>"nullable"
    ];

    /**
     * @return SearchResult
     * @throws \Reprover\Amap\Exceptions\CannotParseResponseException
     * @throws \Reprover\Amap\Exceptions\HttpException
     */
    public function ask()
    {
//        $this->base_config->set("https",true);
        return new SearchResult($this->sendRequest());
    }
}