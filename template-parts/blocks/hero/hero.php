<?php
/**
 * Block Name: hero
 * Description: A custom block for showcasing hero home features.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-home-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-home';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$small_heading = get_field('small_heading') ?: 'TWÓJ DOM';
$main_heading = get_field('main_heading') ?: 'Miejsce na realizację Twoich marzeń';
$description = get_field('description') ?: 'W Mabudo Individual Twoje marzenia o idealnym domu stają się rzeczywistością. Stworzymy dla Ciebie indywidualny projekt łączący estetykę z funkcjonalnością i nowoczesnymi rozwiązaniami.';
$stat_1_number = get_field('stat_1_number') ?: '30+';
$stat_1_label = get_field('stat_1_label') ?: 'lat doświadczenia w produkcji elementów prefabrykowanych';
$stat_2_number = get_field('stat_2_number') ?: '200+';
$stat_2_label = get_field('stat_2_label') ?: 'zrealizowanych inwestycji w Polsce i za granicą';
$stat_3_number = get_field('stat_3_number') ?: '300+';
$stat_3_label = get_field('stat_3_label') ?: 'zatrudnionych specjalistów';
$background_image = get_field('background_image');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="hero-home__content">
        <h3 class="hero-home__small-heading font-medium"><?php echo esc_html($small_heading); ?></h3>
        <h1 class="hero-home__main-heading"><?php echo esc_html($main_heading); ?></h1>
        <p class="hero-home__description"><?php echo esc_html($description); ?></p>
        
        <div class="hero-home__stats ">
            <div class="hero-home__stat text-left">
                <span class="hero-home__stat-number"><?php echo esc_html($stat_1_number); ?></span>
                <p class="hero-home__stat-label"><?php echo esc_html($stat_1_label); ?></p>
            </div>
            <div class="hero-home__stat text-left">
                <span class="hero-home__stat-number"><?php echo esc_html($stat_2_number); ?></span>
                <p class="hero-home__stat-label"><?php echo esc_html($stat_2_label); ?></p>
            </div>
            <div class="hero-home__stat text-left">
                <span class="hero-home__stat-number"><?php echo esc_html($stat_3_number); ?></span>
                <p class="hero-home__stat-label"><?php echo esc_html($stat_3_label); ?></p>
            </div>
        </div>

        
    </div>
    
    <div class="hero-home__image" style="background-image: url('<?php echo esc_url($background_image['url']); ?>');">
    </div>
</div>
