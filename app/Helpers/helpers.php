<?php
  
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Cart;
use App\Models\Category;
  
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}
  
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}

/**
 * Write code on Method to return active string value is Route::currentRouteName() = $routeName
 */
if (!function_exists('setActive')) {
    function setActive($routeName) {
        return Route::currentRouteName() === $routeName ? 'active' : '';
    }
}

if (!function_exists('getServices')) {
    function getServices() {
        return Category::all();
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('set_active')) {
    function set_active($path, $active = 'active') {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}


if (! function_exists('setActive')) {
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('set_show')) {
    function set_show($path, $show = 'show') {
        return call_user_func_array('Request::is', (array)$path) ? $show : '';
    }
}

/**
 * // format number to k or m
 *
 * @return response()
 */
if (! function_exists('kFormatter')) {
    function kFormatter($num) {
        if($num > 999 && $num <= 999999) {
            return round($num/1000,1).'K';
        } else if($num > 999999) {
            return round($num/1000000,1).'M';
        } else if($num <= 999) {
            return $num;
        }
    }
}

/**
 * return money or number format
 *
 * @return response()
 */
if (! function_exists('moneyFormat')) {
    function moneyFormat($number, $isMoney = false) {
        if($isMoney) {
            return '$'.number_format((int)$number, 2);
        } else {
            return (int)$number;
        }
    }
}

/**
 * requests paid This Week report data with day and count
 *
 * @return response()
 */
if (! function_exists('returnArrayOfNameAndCountReport')) {
    function returnArrayOfNameAndCountReport($returnArrayOfNameAndCount) {
        $returnArrayOfNameAndCountReport = [];
        foreach ($returnArrayOfNameAndCount as $key => $value) {
            $returnArrayOfNameAndCountReport[] = [
                'name' => $key,
                'count' => $value->count()
            ];
        }
        return $returnArrayOfNameAndCountReport;
    }
}

/**
 * create full date from a given year and return full date
 *
 * @return response()
 */
if (! function_exists('createFullDateFromYear')) {
    function createFullDateFromYear($year=null) {
        $year = $year ?? Carbon::now()->year;
        return Carbon::createFromDate($year, 1, 1);
    }
}

/**
 * create date from a given date and return full date
 *
 * @return response()
 */
if (! function_exists('createFullDateFromWeek')) {
    function createFullDateFromWeek($date=null) {
        $date = $date ?? today();
        return $date;
    }
}

/**
 * generate unique booking number
 *
 * @return response()
 */
if (!function_exists('generateUniqueBookingNumber')) {
    function generateUniqueBookingNumber()
    {
        do {
            // Generate a random 12-character alphanumeric string
            $bookingNumber = strtoupper(Str::random(12));
        } while (Cart::where('booking_number', $bookingNumber)->exists());

        return $bookingNumber;
    }
}
