<?php

namespace perf2k2\direct\api\entities\ads;

class AdAddItem extends AdAddItemBase
{
    protected $TextAd;
    protected $DynamicTextAd;
    protected $MobileAppAd;
    protected $TextImageAd;
    protected $MobileAppImageAd;
    protected $TextAdBuilderAd;
    protected $MobileAppAdBuilderAd;
    protected $CpcVideoAdBuilderAd;
    protected $CpmBannerAdBuilderAd;

    public function setTextAd(TextAdAdd $TextAd)
    {
      $this->TextAd = $TextAd;
      return $this;
    }

    public function setDynamicTextAd(DynamicTextAdAdd $DynamicTextAd)
    {
      $this->DynamicTextAd = $DynamicTextAd;
      return $this;
    }

    public function setMobileAppAd(MobileAppAdAdd $MobileAppAd)
    {
      $this->MobileAppAd = $MobileAppAd;
      return $this;
    }

    public function setTextImageAd(TextImageAdAdd $TextImageAd)
    {
      $this->TextImageAd = $TextImageAd;
      return $this;
    }

    public function setMobileAppImageAd(MobileAppImageAdAdd $MobileAppImageAd)
    {
      $this->MobileAppImageAd = $MobileAppImageAd;
      return $this;
    }

    public function setTextAdBuilderAd(TextAdBuilderAdAdd $TextAdBuilderAd)
    {
      $this->TextAdBuilderAd = $TextAdBuilderAd;
      return $this;
    }

    public function setMobileAppAdBuilderAd(MobileAppAdBuilderAdAdd $MobileAppAdBuilderAd)
    {
      $this->MobileAppAdBuilderAd = $MobileAppAdBuilderAd;
      return $this;
    }

    public function setCpcVideoAdBuilderAd(CpcVideoAdBuilderAdAdd $CpcVideoAdBuilderAd)
    {
        $this->CpcVideoAdBuilderAd = $CpcVideoAdBuilderAd;
        return $this;
    }

    public function setCpmBannerAdBuilderAd(CpmBannerAdBuilderAdAdd $CpmBannerAdBuilderAd)
    {
        $this->CpmBannerAdBuilderAd = $CpmBannerAdBuilderAd;
        return $this;
    }
}
