<template>
  <div>

    <img alt="Vue logo" src="./assets/logo.png">

    <h1>Instrucciones</h1>

    <ol>
      <li>Deberás crear una nueva rama con tu nombre en el repositorio de github.</li>
      <li>Crear un componente llamado "tabla", en donde deberás diseñar una tabla responsive. (Puedes utilizar alguna libería de CSS)</li>
      <li>Con SASS deberás darle el estilo a tu nuevo componente, deberás utilizar los siguientes colores:
        <ul>
          <li>Azul <span class="Azul"></span></li>
          <li>Verde <span class="Verde"></span></li>
        </ul>
      </li>
      <li>Por medio de API / REST deberás consumir el siguiente servicio web: <span>https://licorne.mx/vacante.php</span> y llenar la tabla con los datos correspondientes.</li>
      <li>Por último, deberás subir tu rama al repositorio de github.</li>
    </ol>

  </div>
</template>

<script>

export default {
  name: 'App',
}
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;

  ol{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-size: 18px;

    span{
      color: rgb(51, 51, 138);
      font-weight: bold;
    }

    li{
      margin: 10px 0;
    }

    ul{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin: 10px 0;

      li{
        margin: 10px 0;
        span{
          padding: 2px 30px;
          display: flex;
        }
        .Azul{
         background-color: rgb(51, 51, 138);
        }
        .Verde{
          background-color: rgb(9, 172, 104);
        }
      }

    }

  }

}
</style>
