<section>
            <div class="container px-15 bg-secondary" style="margin-top: 2vh;">
                <div class="card border-secondary mb-3" style="max-width: 100rem;">
                    <div class="card-header d-flex" style="align-items: center;">
                        <img src="https://robohash.org/<?= $row['name']?>?set=set5" alt="Profil bild" height="5%" width="5%" style="border-radius: 50%;">
                        <a href="users.php?id=<?= $row['user_id'] ?>">
                        <h5 style="padding-left: 1em;">
                            <?= $row['name'] ?>
                        </h5>
                        </a>
                        <h5 class="text-muted pl-2">
                            <?= $row['created_at'] ?>
                        </h5>
                    </div>
                </a>
                    <a href="tweet.php?id=<?= $row['id'] ?>">
                        <div class="card-body">
                            <p class="card-text">
                                <?= $row['body'] ?>
                            </p>
                        </div>
                    </a>
                    <div class="card-footer bg-">
                        <h6>Likes <span style="font-size:150%;color:red;padding-top:10%;">&hearts;</span></h6>
                    </div>
                </div>
            </div>
        </section>