<template>
    <div>
      <button @click="startGame()" class="px-8 py-4 font-bold rounded-full text-lg text-gray-200 bg-green-500 hover:bg-green-900">PLAY</button>
    </div>
</template>

<script>
  export default {
  methods: {
      startGame() {
        location.href = '/game';
      }
  }
  }
</script>