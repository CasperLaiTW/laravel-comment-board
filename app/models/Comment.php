<?php

class Comment extends \LaravelBook\Ardent\Ardent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';
    // guard
    protected $guarded = array('_token');
    // hydrates on new entries' validation
    public $autoHydrateEntityFromInput = true;
    // hydrates whenever validation is called
    public $forceEntityHydrationFromInput = true;
    public static $passwordAttributes  = array('');
    public $autoHashPasswordAttributes = true;
    public $autoPurgeRedundantAttributes = true;
    // reference
    public static $relationsData = array(
        'user'  =>  array(self::BELONGS_TO, 'User')
    );
}