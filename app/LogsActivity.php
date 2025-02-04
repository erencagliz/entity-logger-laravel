<?php

namespace App;

trait LogsActivity
{
    public static function bootLogsActivity()
    {
        static::created(function ($model) {
            self::logChanges($model, 'created');
        });

        static::updated(function ($model) {
            self::logChanges($model, 'updated', $model->getOriginal(), $model->getChanges());
        });

        static::deleted(function ($model) {
            self::logChanges($model, 'deleted', $model->getOriginal());
        });
    }

    protected static function logChanges($model, $action, $before = null, $after = null)
    {
        Log::create([
            'model'    => get_class($model),
            'model_id' => $model->id,
            'before'   => $before ? json_encode($before) : null,
            'after'    => $after ? json_encode($after) : null,
            'action'   => $action,
        ]);
    }
}
