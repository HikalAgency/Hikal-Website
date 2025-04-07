<?php
?>
<style>
    .company-card img.thumb {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }

    .company-card .collapse img.full {
        width: 100%;
        border-radius: 10px;
        margin-top: 10px;
    }

    .company-card {
        transition: box-shadow 0.3s ease;
        overflow: hidden;
    }

    .company-card:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .company-card.expanded {
        min-height: 50vh;
    }

    .card-header {
        cursor: pointer;
    }
</style>

<div class="container py-4">
    <div class="d-flex flex-column gap-3">
        <?php foreach ($companies as $company) { ?>
            <div class="card company-card" id="card-<?php echo $company['id']; ?>">
                <div class="card-header d-flex align-items-center" data-mdb-toggle="collapse"
                    data-mdb-target="#<?php echo $company['id']; ?>" aria-expanded="false"
                    aria-controls="<?php echo $company['id']; ?>" style="cursor: pointer;">
                    <img src="<?php echo $company['image']; ?>" class="thumb me-3" alt="logo">
                    <h5 class="mb-0"><?php echo $company['name']; ?></h5>
                </div>
                <div id="<?php echo $company['id']; ?>" class="collapse" data-mdb-parent=".container">
                    <div class="card-body border-top">
                        <p><?php echo $company['description']; ?></p>
                        <img src="<?php echo $company['image']; ?>" class="full" alt="company">
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<script>
    // Add event listeners to collapse events
    const collapses = document.querySelectorAll('.collapse');

    collapses.forEach(collapse => {
        collapse.addEventListener('show.mdb.collapse', () => {
            document.querySelectorAll('.company-card').forEach(card => card.classList.remove('expanded'));
            const parentCard = collapse.closest('.company-card');
            parentCard.classList.add('expanded');
        });

        collapse.addEventListener('hide.mdb.collapse', () => {
            const parentCard = collapse.closest('.company-card');
            parentCard.classList.remove('expanded');
        });
    });
</script>