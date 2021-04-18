<?php

class StorageGateFacade
{
    public function saveUserAvatar(string $filePath, User $user)
    {
        if($this->virusScanner->scan($filePath)) {
            $this->fileUtil->copy($filePath, 'storage/user_avatar/'.$user->getId().'/original.png');
            $this->imageThumbs->create('200px', '200px', $filePath, 'storage/user_avatar/'.$user->getId().'/200x200.png');
            $this->aws->s3->copy($filePath, 'bucket_name');
        }
    }

    public function saveProductImage(string $filePath, Product $product)
    {
        if($this->virusScanner->scan($filePath)) {
            $this->fileUtil->copy($filePath, 'storage/product_image/'.$product->getId().'/original.png');
            $this->imageThumbs->create('200px', '200px', $filePath, 'storage/product_image/'.$product->getId().'/200x200.png');
            $this->imageThumbs->create('400px', '400px', $filePath, 'storage/product_image/'.$product->getId().'/400x400.png');
            $this->imageThumbs->create('800px', '800px', $filePath, 'storage/product_image/'.$product->getId().'/800x800.png');
            $this->aws->s3->copy($filePath, 'bucket_name');
        }
    }
}