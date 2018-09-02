<?php 

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Classes extends Model  {

	use DatePresenter;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'classes';
	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() 
	{
		// return $this->belongsTo('App\Models\User');
	}
	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function post() 
	{
		// return $this->belongsTo('App\Models\Post');
	}

}