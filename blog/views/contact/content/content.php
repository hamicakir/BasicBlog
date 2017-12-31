<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <article class="contact-media">
                    <h2 class="contact-media-title">İletişim</h2>
                    <div class="bubble-line"></div>
                    <div class="contact-content">
                        <img src="assets/images/06-Contact.jpg" alt="image">
                        <h3>
                            İletişime geçmek için formu kullanın.
                        </h3>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer
                            took a
                            galley of type and scrambled it to make a type specimen book.
                        </p>
                        <div class="contact-row">
                            <form method="post" action="contact.php?p=send">
                                <div class="contact-form">
                                    <p>  Adınız Soyadınız (Gerekli)	</p>
                                    <input type="text" name="name" required>
                                    <p> E-post (Gerekli) </p>
                                    <input type="email" name="email" required>
                                    <p>Konu</p>
                                    <input type="text" name="subject" required>
                                    <p> Mesajınız (Gerekli)</p>
                                    <textarea required name="message"></textarea>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="button">Gönder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-4 sidebar">
                <?php include "views/includes/right_sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>