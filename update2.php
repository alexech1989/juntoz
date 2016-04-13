<?php  // MODIFICAR PRODUCTO

include './modules/Juntoz.php';

include 'eagle.php';

function update_item(){
    
    $juntoz = new Juntoz();
    $resp=json_decode($juntoz->conectar(),true);
    
    $che = curl_init('https://api-public.juntoz.com/products/4526985');
    curl_setopt($che, CURLOPT_CUSTOMREQUEST, 'PUT');
    $var_authorization="Bearer ".$resp["access_token"];
    curl_setopt($che, CURLOPT_HTTPHEADER, array(
                    'Authorization: '.$var_authorization,
                    'Content-Type: application/json'
                )
            );
    $classEagle = new Eagle();
    $classEagle->Name="prueba 10";
    $classEagle->StdBarCode="prueba 10";
    $classEagle->Description="prueba 10";
    $classEagle->BrandName="Cat";
    $classEagle->MetaKeywords="prueba 10";
    $classEagle->MetaDescription="prueba 10";
    $classEagle->MetaTitle="prueba 10";
    $classEagle->DisplayOrder=0;
    $classEagle->BrandId=1;
    $classEagle->MerchantId='4566';
    $classEagle->IsGiftCard=false;
    $classEagle->Weight=0;
    $classEagle->Length=0;
    $classEagle->Width=0;
    $classEagle->Height=0;
    $classEagle->ProductGroup=null;
    $classEagle->CategoryIds=[1];
    $classEagle->Prices=[['StartDate' => '2016-03-17T23:06:00','EndDate' => '2016-03-18T23:06:00','Price' => 250.49, 'IsPublished'=>true, 'IsSpecial'=>true],
        ['StartDate' => '2016-03-18T23:06:00','EndDate' => '2016-03-19T23:06:00','Price' => 250.49, 'IsPublished'=>true, 'IsSpecial'=>false],
        ['StartDate' => '2016-03-19T23:06:00','EndDate' => '2016-03-20T23:06:00','Price' => 250.49, 'IsPublished'=>false, 'IsSpecial'=>true]];
    $classEagle->Files=null;
    $classEagle->Tags=null;
    $classEagle->Specifications=[['Description' => 'Test 02', 'DisplayOrder' => 2,'IsPublished'=>true],
    ['Description' => 'Test 01', 'DisplayOrder' => 1,'IsPublished'=>true],
    ['Description' => 'Test 03', 'DisplayOrder' => 3,'IsPublished'=>true]];
    $classEagle->Attributes=[['Name'=>'Talla', 'Value' => 'S'],['Name'=>'Talla', 'Value' => 'M'],
    ['Name'=>'Color', 'Value' => 'Blanco'],['Name'=>'Color', 'Value' => 'Negro']];
    $classEagle->Variations=null;
    $classEagle->TieredPricingList=null;
    $classEagle->ProductStoreId=134565;
    $classEagle->ProductId=4654654;
    $classEagle->StoreId=154;
    $classEagle->AdditionalNotesOrDesc=null;
    $classEagle->Sku="45269865";
    $classEagle->Stock=15;
    $classEagle->CurrencyCode="PEN";
    $classEagle->Price=15;
    $classEagle->SpecialPrice=0;
    $classEagle->RequireShipping=true;
    $classEagle->ChargeTaxes=true;
    $classEagle->IsPublished=true;
    $classEagle->MinStock=10;
    $classEagle->MinOrderQuantity=1;
    $classEagle->MinCartQuantity=1;
    $classEagle->MaxCartQuantity=2;
    $classEagle->DisplayStockAvailability=false;
    $classEagle->DisplayStockQuantity=false;
    $classEagle->AllowPurchaseWithoutStock=false;
    $classEagle->AvailableStartDate=null;
    $classEagle->AvailableEndDate=null;
    $classEagle->IsSpecialOffer=false;
    $classEagle->SeoUrl="seo_url_1";
    $classEagle->ProductType=1;
    $classEagle->Link1=null;
    $classEagle->Link2=null;
    $classEagle->Link3=null;
    $classEagle->ProductWarranty=1;
    $classEagle->PackageWeight=1;
    $classEagle->PackageLength=1;
    $classEagle->PackageWidth=1;
    $classEagle->PackageHeight=1;
    $classEagle->TaxExempt=true;
    $classEagle->IscTax=1;
    $classEagle->DeliveryTimeId=null;
    $classEagle->ShippingMaxSubsidyPercent=null;
    $classEagle->FileUrls=['https://d13xymm0hzzbsd.cloudfront.net/2/20151228/14513205495899.jpg',
        'https://d13xymm0hzzbsd.cloudfront.net/2/20150406/14283389920685.jpg',
        'https://d13xymm0hzzbsd.cloudfront.net/2/20150618/14346588693790.jpg'];
    $classEagle->TieredPricing=[['Price'=>190, 'MinUnitRange'=> 10, 'MaxUnitRange' => 20, 'Description' => 'Desc 01'],
        ['Price'=>150, 'MinUnitRange'=> 21, 'MaxUnitRange' => 40, 'Description' => 'Desc 02']];
    
    curl_setopt($che, CURLOPT_POSTFIELDS, json_encode($classEagle));
    $respuesta2 = curl_exec ($che);
    $error2 = curl_error($che);
    curl_close ($che);
    return $respuesta2;
}
 echo update_item();
?>