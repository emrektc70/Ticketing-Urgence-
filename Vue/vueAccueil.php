<?php $this->titre = "Ticket"; ?>

<?php foreach ($billets as $billet) :
?>
    <article>
        <header>
            <a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
                <h1 class="titreBillet"><?= $billet['titre'] ?>
                </h1>
            </a>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
        <p><?= $billet['urgence'] ?></p>
        <p><?= $billet['delai'] ?></p>
    </article>
    <hr />
<?php endforeach; ?>