<?php include 'header.php' ?>

<section id="contact-info">
    <h2>Información de Contacto</h2>
    <p>Dirección: Calle Principal, Ciudad</p>
    <p>Teléfono: +34 685 98 56 12</p>
    <p>Correo Electrónico: litelralph@gmail.com</p>
</section>

<section id="business-hours">
    <h2>Horario de Atención</h2>
    <p>Lunes a Viernes: 9:00 AM - 5:00 PM</p>
    <p>Sábados y Domingos: Cerrado</p>
</section>

<main>
    <section id="contact-form">
        <h2>Formulario de Contacto</h2>
        <form action="https://formsubmit.co/litelralph@gmail.com" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>

            <button type="submit" name="submit">Enviar</button>
        </form>

    </section>
</main>

<?php include 'footer.php' ?>
