<?php
/**
 * Tozem Theme Customizer
 */

function tozem_customize_register( $wp_customize ) {

    // =========================================================
    // 0. Section Order (セクション並び替え)
    // =========================================================
    $wp_customize->add_section( 'tozem_order_section', array(
        'title'       => __( 'トップページ セクション並び替え', 'tozem' ),
        'priority'    => 10,
        'description' => __( '数値を変更することで、トップページの各セクションの表示順序を入れ替えることができます。数値が小さいほど上に表示されます。', 'tozem' ),
    ) );

    $sections = array(
        'hero' => array('label' => 'ヒーロー (トップ画像)', 'default' => 5),
        'news' => array('label' => 'ニュース/ブログ', 'default' => 10),
        'concept' => array('label' => 'コンセプト (藤ゼムとは)', 'default' => 20),
        'stay' => array('label' => '宿泊', 'default' => 30),
        'experience' => array('label' => '体験', 'default' => 40),
        'activities' => array('label' => 'アクティビティ', 'default' => 50),
        'local-guide' => array('label' => '周辺ガイド', 'default' => 60),
        'gallery' => array('label' => 'ギャラリー', 'default' => 70),
        'access' => array('label' => 'アクセス', 'default' => 80),
        'price' => array('label' => '料金案内', 'default' => 90),
        'reservation' => array('label' => 'ご予約・お問い合わせ', 'default' => 100),
        'story' => array('label' => 'ストーリー（非表示設定）', 'default' => 999),
    );

    foreach ($sections as $key => $data) {
        $setting_id = 'tozem_order_' . $key;
        $wp_customize->add_setting( $setting_id, array(
            'default'   => $data['default'],
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'
        ) );
        $wp_customize->add_control( $setting_id, array(
            'label'    => $data['label'] . ' (表示順)',
            'section'  => 'tozem_order_section',
            'type'     => 'number',
        ) );
    }

    // =========================================================
    // 1. Header Section (ヘッダー設定)
    // =========================================================
    $wp_customize->add_section( 'tozem_header_section', array(
        'title'       => __( 'ヘッダー設定', 'tozem' ),
        'priority'    => 20,
    ) );

    $wp_customize->add_setting( 'tozem_header_logo_text', array( 'default' => 'TOZEM', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'tozem_header_logo_text', array( 'label' => __( 'ロゴテキスト', 'tozem' ), 'section' => 'tozem_header_section', 'type' => 'text' ) );

    // =========================================================
    // 2. Hero Section (ヒーローエリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_hero_section', array(
        'title'       => __( 'ヒーロー設定', 'tozem' ),
        'priority'    => 30,
        'description' => __( 'トップページのメインビジュアルとテキストを設定します。', 'tozem' ),
    ) );

    // Hero Image
    $wp_customize->add_setting( 'tozem_hero_img', array(
        'default'   => 'https://images.unsplash.com/photo-1581845912101-b79003f1b71e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxvY2VhbiUyMHN1bnNldCUyMGNhbG0lMjBwZWFjZWZ1bHxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_hero_img_control', array(
        'label'    => __( 'メイン画像', 'tozem' ),
        'section'  => 'tozem_hero_section',
        'settings' => 'tozem_hero_img',
    ) ) );

    // Hero Title
    $wp_customize->add_setting( 'tozem_hero_title', array(
        'default'   => '藤ゼム',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'tozem_hero_title_control', array(
        'label'    => __( 'メインタイトル (大字)', 'tozem' ),
        'section'  => 'tozem_hero_section',
        'settings' => 'tozem_hero_title',
        'type'     => 'text',
    ) );

    // Hero Subtitle
    $wp_customize->add_setting( 'tozem_hero_subtitle', array(
        'default'   => 'TOZEM',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'tozem_hero_subtitle_control', array(
        'label'    => __( 'サブタイトル (英字)', 'tozem' ),
        'section'  => 'tozem_hero_section',
        'settings' => 'tozem_hero_subtitle',
        'type'     => 'text',
    ) );

    // Hero Catchcopy
    $wp_customize->add_setting( 'tozem_hero_catch', array(
        'default'   => '海のそばで、静かに過ごす時間',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'tozem_hero_catch_control', array(
        'label'    => __( 'キャッチコピー', 'tozem' ),
        'section'  => 'tozem_hero_section',
        'settings' => 'tozem_hero_catch',
        'type'     => 'text',
    ) );

    // =========================================================
    // 3. Concept Section (コンセプトエリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_concept_section', array(
        'title'       => __( 'コンセプト設定', 'tozem' ),
        'priority'    => 40,
    ) );

    $wp_customize->add_setting( 'tozem_concept_title', array( 'default' => '藤ゼムとは' ) );
    $wp_customize->add_control( 'tozem_concept_title', array( 'label' => __( 'タイトル', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_concept_text_1', array( 'default' => "千葉県館山市、西川名。\n海のそばにたたずむ、古民家一棟貸しの宿。" ) );
    $wp_customize->add_control( 'tozem_concept_text_1', array( 'label' => __( 'テキスト行 1', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'textarea' ) );
    
    $wp_customize->add_setting( 'tozem_concept_text_2', array( 'default' => "光が、海が、余白が、\nあなたを本来の自分へと還していく。" ) );
    $wp_customize->add_control( 'tozem_concept_text_2', array( 'label' => __( 'テキスト行 2', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_concept_text_3', array( 'default' => "飾らない土地の呼吸に、そっと心を委ねる。\n自然と余白を感じる滞在体験を。" ) );
    $wp_customize->add_control( 'tozem_concept_text_3', array( 'label' => __( 'テキスト行 3', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_concept_feat1_title', array( 'default' => '光' ) );
    $wp_customize->add_control( 'tozem_concept_feat1_title', array( 'label' => __( '特徴1: タイトル', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_concept_feat1_text', array( 'default' => "時間と共に変わる\n自然光の移ろい" ) );
    $wp_customize->add_control( 'tozem_concept_feat1_text', array( 'label' => __( '特徴1: テキスト', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_concept_feat2_title', array( 'default' => '海' ) );
    $wp_customize->add_control( 'tozem_concept_feat2_title', array( 'label' => __( '特徴2: タイトル', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_concept_feat2_text', array( 'default' => "波の音に包まれる\n静かな時間" ) );
    $wp_customize->add_control( 'tozem_concept_feat2_text', array( 'label' => __( '特徴2: テキスト', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_concept_feat3_title', array( 'default' => '余白' ) );
    $wp_customize->add_control( 'tozem_concept_feat3_title', array( 'label' => __( '特徴3: タイトル', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_concept_feat3_text', array( 'default' => "何もしない贅沢\n自分を取り戻す空間" ) );
    $wp_customize->add_control( 'tozem_concept_feat3_text', array( 'label' => __( '特徴3: テキスト', 'tozem' ), 'section' => 'tozem_concept_section', 'type' => 'textarea' ) );

    // =========================================================
    // 4. Stay Section (宿泊エリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_stay_section', array(
        'title'       => __( '宿泊設定', 'tozem' ),
        'priority'    => 50,
    ) );

    $wp_customize->add_setting( 'tozem_stay_title', array( 'default' => '宿泊' ) );
    $wp_customize->add_control( 'tozem_stay_title', array( 'label' => __( 'セクションタイトル', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'text' ) );

    // Block 1
    $wp_customize->add_setting( 'tozem_stay_img_1', array( 'default' => 'https://images.unsplash.com/photo-1658664566242-d2a09a92a53e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHNlYXNpZGUlMjBob3VzZSUyMG9jZWFufGVufDF8fHx8MTc3MTM4ODI2M3ww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'transport' => 'refresh' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_stay_img_1', array( 'label' => __( '画像1 (外観など)', 'tozem' ), 'section' => 'tozem_stay_section', 'settings' => 'tozem_stay_img_1' ) ) );

    $wp_customize->add_setting( 'tozem_stay_block1_title', array( 'default' => '海辺の古民家' ) );
    $wp_customize->add_control( 'tozem_stay_block1_title', array( 'label' => __( 'ブロック1: タイトル', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_stay_block1_text1', array( 'default' => "館山の海を望む静かな立地。\n古き良き日本家屋の趣を残しながら、\n快適な滞在ができるよう整えました。" ) );
    $wp_customize->add_control( 'tozem_stay_block1_text1', array( 'label' => __( 'ブロック1: テキスト上段', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'tozem_stay_block1_text2', array( 'default' => "時間を気にせず、\nただ在ることの豊かさを感じてください。" ) );
    $wp_customize->add_control( 'tozem_stay_block1_text2', array( 'label' => __( 'ブロック1: テキスト下段', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'textarea' ) );

    // Block 2
    $wp_customize->add_setting( 'tozem_stay_img_2', array( 'default' => 'https://images.unsplash.com/photo-1759310706794-b8a350561d93?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHRyYWRpdGlvbmFsJTIwaG91c2UlMjBpbnRlcmlvcnxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'transport' => 'refresh' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_stay_img_2', array( 'label' => __( '画像2 (内観など)', 'tozem' ), 'section' => 'tozem_stay_section', 'settings' => 'tozem_stay_img_2' ) ) );

    $wp_customize->add_setting( 'tozem_stay_block2_title', array( 'default' => '心地よい空間' ) );
    $wp_customize->add_control( 'tozem_stay_block2_title', array( 'label' => __( 'ブロック2: タイトル', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_stay_block2_text', array( 'default' => "木のぬくもり、畳の香り。\n自然素材に囲まれた室内は、\n心と体を穏やかに整えてくれます。" ) );
    $wp_customize->add_control( 'tozem_stay_block2_text', array( 'label' => __( 'ブロック2: テキスト', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'textarea' ) );

    // Facilities Details (Textareas for bullet points)
    $wp_customize->add_setting( 'tozem_stay_amenity_title', array( 'default' => '設備・アメニティ (無料)' ) );
    $wp_customize->add_control( 'tozem_stay_amenity_title', array( 'label' => __( 'アメニティ タイトル', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_stay_amenity_list', array( 'default' => "バス / トイレ / 洗面\n外シャワー (海上がりに便利)\nエアコン / 扇風機 / 暖房機器\nWi-Fi (Free)\nシャンプー / リンス / ボディソープ\nフェイスタオル / 歯ブラシセット / ドライヤー" ) );
    $wp_customize->add_control( 'tozem_stay_amenity_list', array( 'label' => __( 'アメニティ リスト (改行で区切り)', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'tozem_stay_amenity_note', array( 'default' => '※寝巻きのご用意はございません' ) );
    $wp_customize->add_control( 'tozem_stay_amenity_note', array( 'label' => __( 'アメニティ 注記', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_stay_kitchen_title', array( 'default' => 'キッチン設備 (無料)' ) );
    $wp_customize->add_control( 'tozem_stay_kitchen_title', array( 'label' => __( 'キッチン タイトル', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_stay_kitchen_list', array( 'default' => "ガスコンロ / 冷蔵庫 / 冷凍庫\n電気炊飯器 / 電気ポット / 土鍋\nカセットコンロ (ボンベは持参)\n調理器具一式 (鍋・フライパン他)\n食器・カトラリー一式\nお子様用プラ食器" ) );
    $wp_customize->add_control( 'tozem_stay_kitchen_list', array( 'label' => __( 'キッチン リスト (改行で区切り)', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_stay_other_title', array( 'default' => 'その他・オプション' ) );
    $wp_customize->add_control( 'tozem_stay_other_title', array( 'label' => __( 'その他 タイトル', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_stay_other_list', array( 'default' => "屋根付きウッドデッキ\n外テーブル\nバーベキュー台 (有料レンタル ¥5,000)\n駐車場 (2台)\n全館禁煙 (屋外に灰皿あり)" ) );
    $wp_customize->add_control( 'tozem_stay_other_list', array( 'label' => __( 'その他 リスト (改行で区切り)', 'tozem' ), 'section' => 'tozem_stay_section', 'type' => 'textarea' ) );

    // =========================================================
    // 5. Stay Rates Section (宿泊料金設定)
    // =========================================================
    $wp_customize->add_section( 'tozem_stay_rates_section', array(
        'title'       => __( '宿泊料金設定', 'tozem' ),
        'priority'    => 100,
    ) );

    $wp_customize->add_setting( 'tozem_rate_title', array( 'default' => '宿泊料金の詳細（税込）' ) );
    $wp_customize->add_control( 'tozem_rate_title', array( 'label' => __( 'セクションタイトル', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_base_note', array( 'default' => '※1棟貸切 4名様までの基本料金です' ) );
    $wp_customize->add_control( 'tozem_rate_base_note', array( 'label' => __( '基本料金注記', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_normal_price', array( 'default' => '¥40,000〜' ) );
    $wp_customize->add_control( 'tozem_rate_normal_price', array( 'label' => __( '通常日 料金', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_high_price', array( 'default' => '¥46,000〜' ) );
    $wp_customize->add_control( 'tozem_rate_high_price', array( 'label' => __( 'ハイシーズン 料金', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_rate_high_note', array( 'default' => '7/13-9/30, GW' ) );
    $wp_customize->add_control( 'tozem_rate_high_note', array( 'label' => __( 'ハイシーズン 期間', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_peak_price', array( 'default' => '¥52,000〜' ) );
    $wp_customize->add_control( 'tozem_rate_peak_price', array( 'label' => __( '特定日 料金', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_rate_peak_note', array( 'default' => '8/9-17, 12/20-1/5' ) );
    $wp_customize->add_control( 'tozem_rate_peak_note', array( 'label' => __( '特定日 期間', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_add_label', array( 'default' => '追加料金 (1名様あたり)' ) );
    $wp_customize->add_control( 'tozem_rate_add_label', array( 'label' => __( '追加料金 ラベル', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_rate_add_price', array( 'default' => '大人: ¥9,000 / 子供: ¥5,000' ) );
    $wp_customize->add_control( 'tozem_rate_add_price', array( 'label' => __( '追加料金 価格', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_discount_label', array( 'default' => '連泊割引' ) );
    $wp_customize->add_control( 'tozem_rate_discount_label', array( 'label' => __( '連泊割引 ラベル', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_rate_discount_text', array( 'default' => '2泊目以降 ¥3,000 引き (清掃なし)' ) );
    $wp_customize->add_control( 'tozem_rate_discount_text', array( 'label' => __( '連泊割引 内容', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_overtime_label', array( 'default' => '時間外利用' ) );
    $wp_customize->add_control( 'tozem_rate_overtime_label', array( 'label' => __( '時間外利用 ラベル', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_rate_overtime_text', array( 'default' => '¥5,000 / 1h (要相談)' ) );
    $wp_customize->add_control( 'tozem_rate_overtime_text', array( 'label' => __( '時間外利用 内容', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_rate_note', array( 'default' => "※季節や曜日により料金が変動いたします。詳細はお問い合わせください。\n※小学生以下のお子様は無料です。" ) );
    $wp_customize->add_control( 'tozem_rate_note', array( 'label' => __( '料金 注記', 'tozem' ), 'section' => 'tozem_stay_rates_section', 'type' => 'textarea' ) );

    // =========================================================
    // 6. Experience Section (体験エリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_experience_section', array(
        'title'       => __( '体験設定', 'tozem' ),
        'priority'    => 60,
    ) );

    $wp_customize->add_setting( 'tozem_exp_title', array( 'default' => '倉庫体験' ) );
    $wp_customize->add_control( 'tozem_exp_title', array( 'label' => __( 'セクションタイトル', 'tozem' ), 'section' => 'tozem_experience_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_exp_img', array( 'default' => 'https://images.unsplash.com/photo-1763824372117-1ff339b522e9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYW5kY3JhZnQlMjB3b3Jrc2hvcCUyMHBvdHRlcnl8ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'transport' => 'refresh' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_exp_img', array( 'label' => __( '体験 画像', 'tozem' ), 'section' => 'tozem_experience_section', 'settings' => 'tozem_exp_img' ) ) );

    $wp_customize->add_setting( 'tozem_exp_block_title', array( 'default' => '手を動かし、整う' ) );
    $wp_customize->add_control( 'tozem_exp_block_title', array( 'label' => __( '見出し', 'tozem' ), 'section' => 'tozem_experience_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_exp_text_1', array( 'default' => "藤ゼムには、宿泊とは別に\n「倉庫」という体験拠点があります。" ) );
    $wp_customize->add_control( 'tozem_exp_text_1', array( 'label' => __( 'テキスト行 1', 'tozem' ), 'section' => 'tozem_experience_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_exp_text_2', array( 'default' => "手仕事を通じて、\n頭を空っぽにする時間。\n集中することで、心が整っていく感覚。" ) );
    $wp_customize->add_control( 'tozem_exp_text_2', array( 'label' => __( 'テキスト行 2', 'tozem' ), 'section' => 'tozem_experience_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_exp_list_title', array( 'default' => '体験内容' ) );
    $wp_customize->add_control( 'tozem_exp_list_title', array( 'label' => __( 'リストタイトル', 'tozem' ), 'section' => 'tozem_experience_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_exp_list', array( 'default' => "季節の手仕事体験\n少人数制のワークショップ\n創作活動を通じた自己との対話" ) );
    $wp_customize->add_control( 'tozem_exp_list', array( 'label' => __( '体験内容リスト (改行で区切り)', 'tozem' ), 'section' => 'tozem_experience_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_exp_note', array( 'default' => "※ 体験内容は季節により変わります\n※ 事前予約制（詳細はお問い合わせください）" ) );
    $wp_customize->add_control( 'tozem_exp_note', array( 'label' => __( '注記', 'tozem' ), 'section' => 'tozem_experience_section', 'type' => 'textarea' ) );

    // =========================================================
    // 8. Optional Rates Section (オプション料金設定)
    // =========================================================
    $wp_customize->add_section( 'tozem_optional_rates_section', array(
        'title'       => __( 'オプション料金設定', 'tozem' ),
        'priority'    => 105,
    ) );

    $wp_customize->add_setting( 'tozem_opt_title', array( 'default' => 'オプション・レンタル' ) );
    $wp_customize->add_control( 'tozem_opt_title', array( 'label' => __( 'セクションタイトル', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_opt_item1_label', array( 'default' => '釣竿レンタル（1日）' ) );
    $wp_customize->add_control( 'tozem_opt_item1_label', array( 'label' => __( '項目1 ラベル', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_opt_item1_price', array( 'default' => '¥3,500' ) );
    $wp_customize->add_control( 'tozem_opt_item1_price', array( 'label' => __( '項目1 価格', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_opt_item2_label', array( 'default' => 'スノーケル' ) );
    $wp_customize->add_control( 'tozem_opt_item2_label', array( 'label' => __( '項目2 ラベル', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_opt_item2_price', array( 'default' => '¥3,500' ) );
    $wp_customize->add_control( 'tozem_opt_item2_price', array( 'label' => __( '項目2 価格', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_opt_item3_label', array( 'default' => 'BBQ施設利用料' ) );
    $wp_customize->add_control( 'tozem_opt_item3_label', array( 'label' => __( '項目3 ラベル', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_opt_item3_price', array( 'default' => '¥5,000' ) );
    $wp_customize->add_control( 'tozem_opt_item3_price', array( 'label' => __( '項目3 価格', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_opt_item4_label', array( 'default' => 'ライフジャケット' ) );
    $wp_customize->add_control( 'tozem_opt_item4_label', array( 'label' => __( '項目4 ラベル', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_opt_item4_price', array( 'default' => '¥500' ) );
    $wp_customize->add_control( 'tozem_opt_item4_price', array( 'label' => __( '項目4 価格', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_opt_note', array( 'default' => "西川名の海は魚影豊かな岩場です。安全のためマリンシューズ・手袋・ラッシュガードの着用をおすすめします（一部無料貸出あり）。" ) );
    $wp_customize->add_control( 'tozem_opt_note', array( 'label' => __( 'オプション注記', 'tozem' ), 'section' => 'tozem_optional_rates_section', 'type' => 'textarea' ) );

    // =========================================================
    // 9. Gallery Section (ギャラリーエリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_gallery_section', array(
        'title'       => __( 'ギャラリー設定', 'tozem' ),
        'priority'    => 80,
    ) );

    $wp_customize->add_setting( 'tozem_gallery_title', array( 'default' => 'ギャラリー' ) );
    $wp_customize->add_control( 'tozem_gallery_title', array( 'label' => __( 'セクションタイトル', 'tozem' ), 'section' => 'tozem_gallery_section', 'type' => 'text' ) );

    $gallery_defaults = array(
        array( 'url' => 'https://images.unsplash.com/photo-1581845912101-b79003f1b71e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxvY2VhbiUyMHN1bnNldCUyMGNhbG0lMjBwZWFjZWZ1bHxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'alt' => 'Ocean view' ),
        array( 'url' => 'https://images.unsplash.com/photo-1745813083465-c753b40e6bd4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0YXRhbWklMjByb29tJTIwamFwYW5lc2V8ZW58MXx8fHwxNzcxMzg4MjY1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'alt' => 'Tatami room' ),
        array( 'url' => 'https://images.unsplash.com/photo-1658664566242-d2a09a92a53e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHNlYXNpZGUlMjBob3VzZSUyMG9jZWFufGVufDF8fHx8MTc3MTM4ODI2M3ww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'alt' => 'Exterior' ),
        array( 'url' => 'https://images.unsplash.com/photo-1761748561933-555d8f209a74?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb2FzdGFsJTIwamFwYW4lMjBuYXR1cmV8ZW58MXx8fHwxNzcxMzg4MjY1fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'alt' => 'Nature' ),
        array( 'url' => 'https://images.unsplash.com/photo-1759310706794-b8a350561d93?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMHRyYWRpdGlvbmFsJTIwaG91c2UlMjBpbnRlcmlvcnxlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'alt' => 'Interior' ),
        array( 'url' => 'https://images.unsplash.com/photo-1763824372117-1ff339b522e9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoYW5kY3JhZnQlMjB3b3Jrc2hvcCUyMHBvdHRlcnl8ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'alt' => 'Workshop' ),
    );

    for ( $i = 1; $i <= 6; $i++ ) {
        $wp_customize->add_setting( 'tozem_gallery_img_' . $i, array( 'default' => $gallery_defaults[$i-1]['url'], 'transport' => 'refresh' ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_gallery_img_' . $i, array( 'label' => sprintf( __( 'ギャラリー画像 %d', 'tozem' ), $i ), 'section' => 'tozem_gallery_section', 'settings' => 'tozem_gallery_img_' . $i ) ) );
        
        $wp_customize->add_setting( 'tozem_gallery_alt_' . $i, array( 'default' => $gallery_defaults[$i-1]['alt'] ) );
        $wp_customize->add_control( 'tozem_gallery_alt_' . $i, array( 'label' => sprintf( __( '画像 %d 代替テキスト(alt)', 'tozem' ), $i ), 'section' => 'tozem_gallery_section', 'type' => 'text' ) );
    }

    // =========================================================
    // 7. Activities Section (アクティビティエリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_activities_section', array(
        'title'       => __( 'アクティビティ設定', 'tozem' ),
        'priority'    => 70,
    ) );

    $wp_customize->add_setting( 'tozem_act_title', array( 'default' => 'アクティビティ' ) );
    $wp_customize->add_control( 'tozem_act_title', array( 'label' => __( 'セクションタイトル', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );

    // Block 1 (BBQ)
    $wp_customize->add_setting( 'tozem_act_img_1', array( 'default' => 'https://images.unsplash.com/photo-1544077960-604201fe74bc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxiYnElMjBnYXJkZW58ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'transport' => 'refresh' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_act_img_1', array( 'label' => __( '画像1 (BBQ)', 'tozem' ), 'section' => 'tozem_activities_section', 'settings' => 'tozem_act_img_1' ) ) );

    $wp_customize->add_setting( 'tozem_act_block1_title', array( 'default' => 'BBQ' ) );
    $wp_customize->add_control( 'tozem_act_block1_title', array( 'label' => __( 'ブロック1: タイトル', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'tozem_act_block1_text', array( 'default' => "屋根付きのウッドデッキで、雨の日でも安心してBBQをお楽しみいただけます。\n静かな潮風を感じながら、地元の食材を囲む贅沢なひとときを。" ) );
    $wp_customize->add_control( 'tozem_act_block1_text', array( 'label' => __( 'ブロック1: テキスト', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_act_block1_price', array( 'default' => '利用料: 5,000円/日（コンロ、網、トング、テーブル等の機材一式）' ) );
    $wp_customize->add_control( 'tozem_act_block1_price', array( 'label' => __( 'ブロック1: 利用料', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_act_block1_note', array( 'default' => "※食材、炭、着火剤、調味料、鉄板はご持参ください。\n※お庭での手持ち花火も可能です（20:30まで、打ち上げ不可）。" ) );
    $wp_customize->add_control( 'tozem_act_block1_note', array( 'label' => __( 'ブロック1: 注記', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'textarea' ) );

    // Block 2 (Sea Activity)
    $wp_customize->add_setting( 'tozem_act_img_2', array( 'default' => 'https://images.unsplash.com/photo-1518173946687-a4c8a9b749f5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxyb2NreSUyMGJlYWNoJTIwamFwYW58ZW58MXx8fHwxNzcxMzg4MjY0fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'transport' => 'refresh' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_act_img_2', array( 'label' => __( '画像2 (海遊び・釣り)', 'tozem' ), 'section' => 'tozem_activities_section', 'settings' => 'tozem_act_img_2' ) ) );

    $wp_customize->add_setting( 'tozem_act_block2_title', array( 'default' => '海遊び・釣り' ) );
    $wp_customize->add_control( 'tozem_act_block2_title', array( 'label' => __( 'ブロック2: タイトル', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'tozem_act_block2_text', array( 'default' => "徒歩2分の目の前の海は、透明度抜群の岩場。\n磯遊びやシュノーケリングで、色鮮やかな熱帯魚に出会えることも。" ) );
    $wp_customize->add_control( 'tozem_act_block2_text', array( 'label' => __( 'ブロック2: テキスト', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_act_block2_price', array( 'default' => '外シャワー完備で海上がりも快適です。岩場ですのでマリンシューズのご持参をお勧めします。' ) );
    $wp_customize->add_control( 'tozem_act_block2_price', array( 'label' => __( 'ブロック2: 案内テキスト', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_act_block2_note', array( 'default' => '※海水浴場（波左間、沖の島など）へも車で5〜15分でアクセス可能です。' ) );
    $wp_customize->add_control( 'tozem_act_block2_note', array( 'label' => __( 'ブロック2: 注記', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );

    // Block 3 (Nearby Spots)
    $wp_customize->add_setting( 'tozem_act_block3_title', array( 'default' => '周辺スポット' ) );
    $wp_customize->add_control( 'tozem_act_block3_title', array( 'label' => __( '周辺スポット タイトル', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_act_list1_title', array( 'default' => 'アクティビティ' ) );
    $wp_customize->add_control( 'tozem_act_list1_title', array( 'label' => __( 'リスト1 タイトル', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_act_list1_items', array( 'default' => "陶芸体験: 雨天でも楽しめます（要事前確認）。\nダイビング: 西川名ダイビングサービス・港まで徒歩1分。\nゴルフ: 館山カントリー（車8分）、房州カントリー（車12分）。" ) );
    $wp_customize->add_control( 'tozem_act_list1_items', array( 'label' => __( 'リスト1 項目 (コロン「:」でラベルと説明を分割)', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_act_list2_title', array( 'default' => '観光・癒やし' ) );
    $wp_customize->add_control( 'tozem_act_list2_title', array( 'label' => __( 'リスト2 タイトル', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_act_list2_items', array( 'default' => "温泉: 千里の風・花しぶき（車10分）、里見の湯（車20分）。\n灯台: 洲崎灯台（車4分）、野島崎灯台（車24分）。\n絶景: 富士山の眺望や、伊豆大島を臨む夕日が楽しめます。" ) );
    $wp_customize->add_control( 'tozem_act_list2_items', array( 'label' => __( 'リスト2 項目 (コロン「:」でラベルと説明を分割)', 'tozem' ), 'section' => 'tozem_activities_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_act_img_3', array( 'default' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxqYXBhbmVzZSUyMG9uc2VuJTIwdmlld3xlbnwxfHx8fDE3NzEzODgyNjR8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral', 'transport' => 'refresh' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tozem_act_img_3', array( 'label' => __( '画像3 (周辺スポットなど)', 'tozem' ), 'section' => 'tozem_activities_section', 'settings' => 'tozem_act_img_3' ) ) );

    // =========================================================
    // 9.5 Access Section (アクセスエリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_access_section', array(
        'title'       => __( 'アクセス設定', 'tozem' ),
        'priority'    => 90,
    ) );

    $wp_customize->add_setting( 'tozem_access_address', array( 'default' => "〒294-0315<br />千葉県館山市西川名184-1" ) );
    $wp_customize->add_control( 'tozem_access_address', array( 'label' => __( '住所 (HTML可)', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_access_car_title', array( 'default' => 'お車でお越しの方' ) );
    $wp_customize->add_control( 'tozem_access_car_title', array( 'label' => __( '車: タイトル', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_access_car_route', array( 'default' => "東京湾アクアライン ➡ 木更津IC ➡ 館山自動車道 ➡ 富浦IC<br />富浦ICより約30分" ) );
    $wp_customize->add_control( 'tozem_access_car_route', array( 'label' => __( '車: ルート (HTML可)', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'tozem_access_car_note', array( 'default' => "※ 駐車場あり（2台分）" ) );
    $wp_customize->add_control( 'tozem_access_car_note', array( 'label' => __( '車: 注記', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_access_public_title', array( 'default' => '公共交通機関でお越しの方' ) );
    $wp_customize->add_control( 'tozem_access_public_title', array( 'label' => __( '公共交通: メインタイトル', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'tozem_access_public_bus_title', array( 'default' => '高速バス（房総なのはな号）' ) );
    $wp_customize->add_control( 'tozem_access_public_bus_title', array( 'label' => __( '公共交通1 (バス): タイトル', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_access_public_bus_route', array( 'default' => '新宿駅 ➡ 館山駅（約2時間 / 2,500円程）' ) );
    $wp_customize->add_control( 'tozem_access_public_bus_route', array( 'label' => __( '公共交通1 (バス): ルート (HTML可)', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_access_public_train_title', array( 'default' => '電車' ) );
    $wp_customize->add_control( 'tozem_access_public_train_title', array( 'label' => __( '公共交通2 (電車): タイトル', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_access_public_train_route', array( 'default' => '木更津（JR内房線 安房鴨川行）➡ 館山駅' ) );
    $wp_customize->add_control( 'tozem_access_public_train_route', array( 'label' => __( '公共交通2 (電車): ルート (HTML可)', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_access_public_local_title', array( 'default' => '館山駅より' ) );
    $wp_customize->add_control( 'tozem_access_public_local_title', array( 'label' => __( '公共交通3 (館山駅より): タイトル', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_access_public_local_route', array( 'default' => "路線バス（館山駅東口）➡ 西川名バス停（約30分）<br />バス停より徒歩1分" ) );
    $wp_customize->add_control( 'tozem_access_public_local_route', array( 'label' => __( '公共交通3 (館山駅より): ルート (HTML可)', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_access_time_title', array( 'default' => 'チェックイン・アウト' ) );
    $wp_customize->add_control( 'tozem_access_time_title', array( 'label' => __( '時間: タイトル', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );
    $wp_customize->add_setting( 'tozem_access_time_text', array( 'default' => "チェックイン：15:00〜18:00<br />チェックアウト：〜10:00" ) );
    $wp_customize->add_control( 'tozem_access_time_text', array( 'label' => __( '時間: 内容 (HTML可)', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'tozem_access_time_note', array( 'default' => '※ 時間外をご希望の場合はご相談ください' ) );
    $wp_customize->add_control( 'tozem_access_time_note', array( 'label' => __( '時間: 注記', 'tozem' ), 'section' => 'tozem_access_section', 'type' => 'text' ) );

    // =========================================================
    // 10. Reservation Section (ご予約エリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_reservation_section', array(
        'title'       => __( 'ご予約設定', 'tozem' ),
        'priority'    => 110,
    ) );

    $wp_customize->add_setting( 'tozem_res_title', array( 'default' => 'ご予約・お問い合わせ' ) );
    $wp_customize->add_control( 'tozem_res_title', array( 'label' => __( 'セクションタイトル', 'tozem' ), 'section' => 'tozem_reservation_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_res_subtitle', array( 'default' => 'Reservation' ) );
    $wp_customize->add_control( 'tozem_res_subtitle', array( 'label' => __( 'サブタイトル', 'tozem' ), 'section' => 'tozem_reservation_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_res_text', array( 'default' => "ご予約・ご質問は下記フォームよりお問い合わせください。\n3営業日以内にご連絡いたします。" ) );
    $wp_customize->add_control( 'tozem_res_text', array( 'label' => __( '案内テキスト', 'tozem' ), 'section' => 'tozem_reservation_section', 'type' => 'textarea' ) );

    // Contact Form 7 Shortcode
    $wp_customize->add_setting( 'tozem_res_cf7_shortcode', array(
        'default'           => '[contact-form-7 id="9999999" title="ご予約・お問い合わせ"]',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'tozem_res_cf7_shortcode', array(
        'label'    => __( 'Contact Form 7 ショートコード', 'tozem' ),
        'description' => __( 'Contact Form 7 プラグインで作成したフォームのショートコードを入力してください。（例: [contact-form-7 id="123" title="お問合せ"]）', 'tozem' ),
        'section'  => 'tozem_reservation_section',
        'type'     => 'text',
    ) );

    // =========================================================
    // 11. Footer Section (フッターエリア)
    // =========================================================
    $wp_customize->add_section( 'tozem_footer_section', array(
        'title'       => __( 'フッター設定', 'tozem' ),
        'priority'    => 120,
    ) );

    $wp_customize->add_setting( 'tozem_footer_title', array( 'default' => 'TOZEM' ) );
    $wp_customize->add_control( 'tozem_footer_title', array( 'label' => __( 'フッター タイトル', 'tozem' ), 'section' => 'tozem_footer_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_footer_subtitle', array( 'default' => '藤ゼム' ) );
    $wp_customize->add_control( 'tozem_footer_subtitle', array( 'label' => __( 'フッター サブタイトル', 'tozem' ), 'section' => 'tozem_footer_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_footer_address', array( 'default' => "〒294-0315\n千葉県館山市西川名184-1" ) );
    $wp_customize->add_control( 'tozem_footer_address', array( 'label' => __( '住所', 'tozem' ), 'section' => 'tozem_footer_section', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'tozem_footer_instagram', array( 'default' => 'https://www.instagram.com/tozem_tateyama/' ) );
    $wp_customize->add_control( 'tozem_footer_instagram', array( 'label' => __( 'Instagram URL', 'tozem' ), 'section' => 'tozem_footer_section', 'type' => 'url' ) );

    $wp_customize->add_setting( 'tozem_footer_email', array( 'default' => 'info@tozem.net' ) );
    $wp_customize->add_control( 'tozem_footer_email', array( 'label' => __( 'お問い合わせメールアドレス', 'tozem' ), 'section' => 'tozem_footer_section', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tozem_footer_copyright', array( 'default' => '© 2026 TOZEM. All rights reserved.' ) );
    $wp_customize->add_control( 'tozem_footer_copyright', array( 'label' => __( 'コピーライト', 'tozem' ), 'section' => 'tozem_footer_section', 'type' => 'text' ) );

    // Instagram Feed Shortcode (Footer Bottom / General)
    $wp_customize->add_setting( 'tozem_instagram_shortcode', array(
        'default'           => '[instagram-feed]',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'tozem_instagram_shortcode', array(
        'label'    => __( 'Instagram Feed ショートコード', 'tozem' ),
        'description' => __( 'トップページ下部に表示するInstagramフィードのショートコードを入力してください。（Smash Balloonプラグイン用）', 'tozem' ),
        'section'  => 'tozem_footer_section',
        'type'     => 'text',
    ) );

}
add_action( 'customize_register', 'tozem_customize_register' );
