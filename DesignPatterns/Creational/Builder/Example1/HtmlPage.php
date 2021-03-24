<?php

class HtmlPage
{
    protected $title = '';
    protected $header = '';
    protected $body = '';

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }
}

class ProductsHtmlPageBuilder
{
    protected $title = '';
    protected $products = [];
    protected $categories = [];

    public function setPageTitle($title) : ProductsHtmlPageBuilder
    {
        $this->title = $title;
        return $this;
    }

    public function addProduct($imageUrl = '', $name = '', $price = 100, $discountPrice = 50) : ProductsHtmlPageBuilder
    {
        $this->products[] = [
            'image' => $imageUrl,
            'name' => $name,
            'price' => $price,
            'discount_price'=> $discountPrice
        ];
        return $this;
    }

    public function addCategories($categoryName, $url) : ProductsHtmlPageBuilder
    {
        $this->categories[] = [
            'name' => $categoryName,
            'url' => $url
        ];
        return $this;
    }


    public function build():HtmlPage
    {
        $page = new HtmlPage();
        $page->setTitle("Products page | {$this->title}");

        $categoriesHtml = $this->buildCategoriesHtml();
        $productsHtml = $this->buildProductsHtml();
        $page->setBody($categoriesHtml.$productsHtml);

        return $page;
    }

    /**
     * @return string
     */
    protected function buildProductsHtml(): string
    {
        $html = '<ul>';
        foreach ($this->products as $product) {
            $html .= <<<PRD
                <li>
                    <img src="{$product['image']}">
                    <span>{$product['name']}</span>
                    <span>{$product['price']}</span>
                    <span>{$product['discount_price']}</span>
                </li>
PRD;
        }
        return $html.PHP_EOL.'</ul>'.PHP_EOL;
    }

    private function buildCategoriesHtml()
    {
        $html = '<ul>';
        foreach ($this->categories as $category) {
            $html .= <<<CTR
                <li>
                    <a href="{$category['url']}">{$category['name']}</a>
                </li>
CTR;
        }
        return $html.PHP_EOL.'</ul>'.PHP_EOL;

    }

}

