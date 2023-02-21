<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function calc_show_span_day($value='')
{
	$CI =& get_instance();

	$return_ary = array();
	$return_ary['date_get_param'] = '';

	if ($CI->input->get('date')) {
		$date = $CI->input->get('date');
		$return_ary['date_get_param'] = $date;
	}else{
		$date = date('Ymd');
	}

	$return_ary['date'] = date('Y年n月j日', strtotime($date));
	$return_ary['date'] .= ' ' . $CI->config->item('weekjp')[date('w', strtotime($date))];

	$return_ary['date_unformat'] = date('Ymd', strtotime($date));

	$return_ary['date_next'] = date('Ymd', strtotime($date . ' +1 day'));
	$return_ary['date_prev'] = date('Ymd', strtotime($date . ' -1 day'));

	return $return_ary;

}


function calc_show_span_week($value='')
{
	$CI =& get_instance();
	$return_ary = array();
	$return_ary['date_get_param'] = '';

	if ($CI->input->get('date')) {
		$date = $CI->input->get('date');
		$return_ary['date_get_param'] = $date;
	}else{
		$date = date('Ymd');
	}

	$return_ary['date'] = date('Y年n月j日', strtotime($date));
	$return_ary['date'] .= ' ' . $CI->config->item('weekjp')[date('w', strtotime($date))];

	$week_past_day = 0 - date('w', strtotime($date)) +1;
	$return_ary['week_past_day'] = $week_past_day;

	$return_ary['span_from'] = date('Y-m-d', strtotime($date. ' '.$week_past_day.' day'));
	$return_ary['span_to']   = date('Y-m-d', strtotime($return_ary['span_from'] . ' +6 day'));

	$span_ary = array();
	for ($i=$week_past_day; $i < 7 + $week_past_day; $i++) {
		$date_strtotime = strtotime($date . ' +'.$i.' day');

		$span_ary[date('Ymd', $date_strtotime)] = array(
			'label' => date('d日', $date_strtotime) .
			'（'. $CI->config->item('weekjp')[date('w', $date_strtotime)].'）',
			'today' => date('md', $date_strtotime) == date('md')
		);
	}

	$return_ary['span_ary'] = $span_ary;

	$return_ary['date_next'] = date('Ymd', strtotime($date . ' +7 day'));
	$return_ary['date_prev'] = date('Ymd', strtotime($date . ' -7 day'));

	return $return_ary;
}
function calc_show_span_search($value='')
{
    $CI =& get_instance();
    $return_ary = array();
    $return_ary['date_get_param'] = '';

    if ($CI->input->get('date')) {
        $date = $CI->input->get('date');
        $return_ary['date_get_param'] = $date;
    }else{
        $date = date('Ymd');
    }
    if ($CI->input->get('start_month')) {
        $start = $CI->input->get('start_month');
        $return_ary['date_get_start'] = $start;
    }
    if ($CI->input->get('end_month')) {
        $end = $CI->input->get('end_month');
        $return_ary['date_get_end'] = $end;
    }

    $return_ary['date'] = date('Y年n月j日', strtotime($date));

    $week_past_day = 0 - date('w', strtotime($date)) +1;
    $return_ary['week_past_day'] = $week_past_day;

    $return_ary['span_from'] = date('Y-m-01', strtotime($start));
    $return_ary['span_to']   = date('Y-m-t', strtotime($end));

//    $span_ary = array();
//    for ($i=$week_past_day; $i < 7 + $week_past_day; $i++) {
//        $date_strtotime = strtotime($date . ' +'.$i.' day');
//
//        $span_ary[date('Ymd', $date_strtotime)] = array(
//            'label' => date('d日', $date_strtotime) .
//                '（'. $CI->config->item('weekjp')[date('w', $date_strtotime)].'）',
//            'today' => date('md', $date_strtotime) == date('md')
//        );
//    }
//    $return_ary['span_ary'] = $span_ary;
//    $return_ary['date_next'] = date('Ymd', strtotime($date . ' +7 day'));
//    $return_ary['date_prev'] = date('Ymd', strtotime($date . ' -7 day'));

    return $return_ary;
}

function calc_show_span_month($value='')
{
	$CI =& get_instance();
	$return_ary = array();
	$return_ary['date_get_param'] = '';

	if ($CI->input->get('date')) {
		$date = $CI->input->get('date');
		$return_ary['date_get_param'] = $date;
	}else{
		$date = date('Ymd');
	}

	$return_ary['date']        = date('Y年n月', strtotime($date));
	$return_ary['search_span'] = date('Y-m',    strtotime($date));

	$return_ary['date_next'] = date('Ymd', strtotime($date. ' +1 month'));
	$return_ary['date_prev'] = date('Ymd', strtotime($date. ' -1 month'));

	return $return_ary;
}
function calc_show_span_year($value='')
{
    $CI =& get_instance();
    $return_ary = array();
    $return_ary['date_get_param'] = '';

    if ($CI->input->get('date')) {
        $date = $CI->input->get('date');
        $return_ary['date_get_param'] = $date;
    }else{
        $date = date('Ymd');
    }

    $return_ary['date']        = date('Y年', strtotime($date));
    $return_ary['search_span'] = date('Y',    strtotime($date));

    $return_ary['date_next'] = date('Ymd', strtotime($date. ' +1 year'));
    $return_ary['date_prev'] = date('Ymd', strtotime($date. ' -1 year'));

    return $return_ary;
}

