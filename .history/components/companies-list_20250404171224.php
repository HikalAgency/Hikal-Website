<?php
?>
<style>
    .card-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .expand-card {
        height: 15vh;
        transition: height 0.5s ease;
        background-size: cover;
        background-position: center;
        cursor: pointer;
        border-radius: 12px;
        overflow: hidden;
        color: white;
        position: relative;
        display: flex;
        align-items: flex-end;
        padding: 15px;
    }

    .expand-card.active {
        height: 70vh;
    }

    .expand-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent 60%);
        z-index: 0;
    }

    .expand-card .content {
        position: relative;
        z-index: 1;
    }

    .expand-card h4,
    .expand-card p {
        margin: 0;
    }
</style>

<div class="container py-4">
    <div class="card-container">

        <!-- PHP Loop -->
        <?php
        $cards = [
            ['title' => 'Company One', 'desc' => 'Description 1', 'image' => 'https://picsum.photos/id/1011/800/600'],
            ['title' => 'Company Two', 'desc' => 'Description 2', 'image' => 'https://picsum.photos/id/1012/800/600'],
            ['title' => 'Company Three', 'desc' => 'Description 3', 'image' => 'https://picsum.photos/id/1013/800/600'],
            ['title' => 'Company Four', 'desc' => 'Description 4', 'image' => 'https://picsum.photos/id/1014/800/600'],
            ['title' => 'Company Five', 'desc' => 'Description 5', 'image' => 'https://picsum.photos/id/1015/800/600'],
        ];
        foreach ($cards as $index => $card) {
            ?>
            <div class="expand-card" style="background-image: url('<?php echo $card['image']; ?>');"
                data-index="<?php echo $index; ?>">
                <div class="content">
                    <h4><?php echo $card['title']; ?></h4>
                    <p><?php echo $card['desc']; ?></p>
                </div>
            </div>
        <?php } ?>

    </div>
</div>



<script>
    $(".option").on("click", function () {
        $(".option").removeClass("active");
        $(this).addClass("active");
    });
</script>