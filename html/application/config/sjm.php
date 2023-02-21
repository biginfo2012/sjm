<?php

$config['pref_code'] = array(
	1 => '北海道',
	2 => '青森県',
	3 => '岩手県',
	4 => '宮城県',
	5 => '秋田県',
	6 => '山形県',
	7 => '福島県',
	8 => '茨城県',
	9 => '栃木県',
	10 => '群馬県',
	11 => '埼玉県',
	12 => '千葉県',
	13 => '東京都',
	14 => '神奈川県',
	15 => '新潟県',
	16 => '富山県',
	17 => '石川県',
	18 => '福井県',
	19 => '山梨県',
	20 => '長野県',
	21 => '岐阜県',
	22 => '静岡県',
	23 => '愛知県',
	24 => '三重県',
	25 => '滋賀県',
	26 => '京都府',
	27 => '大阪府',
	28 => '兵庫県',
	29 => '奈良県',
	30 => '和歌山県',
	31 => '鳥取県',
	32 => '島根県',
	33 => '岡山県',
	34 => '広島県',
	35 => '山口県',
	36 => '徳島県',
	37 => '香川県',
	38 => '愛媛県',
	39 => '高知県',
	40 => '福岡県',
	41 => '佐賀県',
	42 => '長崎県',
	43 => '熊本県',
	44 => '大分県',
	45 => '宮崎県',
	46 => '鹿児島県',
	47 => '沖縄県',
);

$config['schedule_visit_facility_worker'] = array(
	1 => 'Dr',
	2 => 'ME',
	3 => 'その他',
	4 => '決定権者',
	5 => '代理店',
	);

$config['schedule_visit_type'] = array(
	1 => 'LV営業',
	2 => 'HV営業（CRTP含む）',
	3 => 'オペ立会',
	4 => '訪問したが会えず',
	5 => 'その他',
	6 => 'AF事業ヘルプ',
	7 => 'メール（eプロモーション）',
	8 => 'PM営業',
	9 => 'HV営業（CRTP含む）',
	10 => 'ICM営業',
	11 => 'マテリアル使用',
	12 => '説明会・勉強会・社内講演会など',
	13 => '植込み立合い',
	14 => '他科オペ立合い／非植込み施設の付帯業務',
	15 => 'デバイス外来',
	16 => 'ヘルプ（担当施設外）',
	17 => '同行',	
	);

$config['schedule_sales_type'] = array(
	1 => '3D Mapping関連',
	2 => 'キャピタル関連',
	3 => 'Sensithermo・ICE関連',
	4 => 'AF事業ヘルプ',
	5 => 'CRM事業ヘルプ',
	6 => '会えなかった/立会だけで営業はできなかった',
	7 => 'その他',
	);

$config['schedule_report_type'] = array(
	1 => '営業活動報告',
	2 => 'NavXレポート',
	3 => 'オペサポート活動報告');

$config['schedule_case_name'] = array(
	1  => 'PSVT (ABL)',
	2  => 'AT/uncommonAFL (ABL)',
	3  => 'Common AFL (ABL)',
	4  => 'AF (ABL)',
	5  => 'VPC (ABL)',
	6  => 'VT (ABL)',
	7  => 'VT,VF : Epi (ABL)',
	8  => 'Brady/Tachy (EPS)',
	9  => 'BRK (ICE)',
	10 => 'ASD/VSD (ICE)',
	11 => 'TAVI (ICE)',
	12 => 'PTAV/PTMV (ICE)',
	13 => 'その他',
	);

$config['schedule_capital'] = array(
	1 => 'Lab(Cardio Lab)',
	2 => 'Lab(EPWM/Claris)',
	3 => 'Ensite',
	4 => 'ViewMate');

$config['schedule_witness_content'] = array(
	1 => '単独操作',
	2 => 'OJTサポートあり',
	3 => 'ME/代理店操作',
	4 => '社員OJT',
	5 => '症例見学',
	6 => '製品説明会',
	7 => 'ME業務移管・トレーニング',
	8 => 'トラブルシューティング',
	9 => 'COEサポート',
	10 => 'CRMデバイスヘルプ',
	);

$config['navx_case_type'] = array(
	1  => '発作性AF 1st',
	2  => '発作性AF 2nd以降',
	3  => '持続性AF 1st',
	4  => '持続性AF 2nd以降',
	5  => '慢性AF 1st',
	6  => '慢性AF 2nd以降',
	7  => 'AFL',
	8  => 'AT',
	9  => 'VT',
	10 => 'RVOT',
	11 => 'LVOT',
	12 => 'PSVT',
	13 => 'その他');

$config['navx_system_in_case'] = array(
	1 => 'NavX',
	2 => 'NavX+CRYO',
	3 => 'その他',
	4 => '未使用',
	);

$config['navx_ablation_catheter_combination'] = array(
	1 => 'イリゲーション',
	2 => 'Non イリゲーション',
	3 => 'Non イリゲーションとイリゲーション',
	4 => '未使用',);

$config['navx_ablation_catheter_type_sjm'] = array(
	1 => 'FlexAbility',
	2 => 'FlexAbilitySE',
	3 => 'Tacticath',
	4 => 'TacticathSE',
	5 => 'クールフレックス',
	6 => 'その他');

$config['navx_ablation_catheter_type_jnj'] = array(
	1 => 'セルシウス',
	2 => 'サーモクール',
	3 => 'サーモクールSF',
	4 => 'スマートタッチ');

$config['navx_ablation_catheter_type_bsx'] = array(
	1 => 'ブレーザーⅡ（8mm）',
	2 => 'ブレーザーⅡ（10mm）',
	3 => 'MIFI');

$config['navx_ablation_catheter_type_jll'] = array(
	1 => 'アブレーズ(4mm)',
	2 => 'アブレーズ(6mm)',
	3 => 'アブレーズ(8mm)',
	4 => 'ファンタジスタ(4mm)',
	5 => 'ファンタジスタ(8mm)',
	6 => 'ベルヌーイ');

$config['navx_ablation_catheter_type_mdt'] = array(
	1 => 'ブリーザマックス');

$config['navx_electric_catheter_maker'] = array(
	1 => 'SJM',
	2 => 'NK',
	3 => 'JNJ',
	4 => 'JLL',
	// 5 => 'その他',
	);

$config['navx_ice_status'] = array(
	1 => '不使用',
	2 => 'SJM',
	3 => 'NK',
	4 => 'JNJ(アキュナビ)',
	5 => 'JNJ(サウンドスター)',
	6 => 'BSX',
	7 => 'JLL',
	8 => 'その他');

$config['navx_sensiterm_status'] = array(
	1 => '不使用',
	2 => 'SJM(3極)',
	3 => 'SJM(5/7極)',
	4 => '日本ライフライン',
	5 => 'その他');

$config['weekjp'] = array(
	0 => '日',
	1 => '月',
	2 => '火',
	3 => '水',
	4 => '木',
	5 => '金',
	6 => '土',);

$config['role_code'] = array(
	0 => 'AF事業部Sales',
	1 => 'AF事業部FCE',
	2 => 'CRM事業部Sales',
	3 => 'CRM事業部FCE',
	4 => 'CRM NSD',
	5 => 'CRM Manager',
	6 => 'FCE Manager',
	);


$config['password_hash']    = 'PZrSnP8zrNhH';
$config['password_iv']      = "E2bcJGuT";
$config['password_options'] = OPENSSL_RAW_DATA;
$config['password_method']  = 'des3';


$config['crm_nsd_id'] = 30008989;
$config['fce_manager_id'] = array(30009148, 30009293);





