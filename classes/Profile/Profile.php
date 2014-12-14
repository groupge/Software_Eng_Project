<?php

class Profile {
    private $followers;// List<User>
    private $following; //List<User>
    private $pref;
    private $settings;
    
    public function __construct($followers, $following,$mailRemind
                                 ,$notiRemind, $preferCtrl,$SettCtrl) {
        $this->followers = $followers;
        $this->following = $following;
        $this->pref = new Preferences($mailRemind, $notiRemind, $preferCtrl);
        $this->settings = new Settings($SettCtrl);
    }
    
    public function getFollowers()
    {
        return $this->followers;
    }
    
    public function setFollowers($follow)
    {
        $this->followers = $follow;
    }

    public function getFollowing()
    {
        return $this->following;
    }
}
