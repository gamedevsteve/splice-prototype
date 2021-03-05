<template>
    <div class="game-wrapper" style="width: 100%, height: 100%;">
        <character-selection></character-selection>
    </div>
</template>
<script>
    export default {
        data: function() {
            return {
                character1: {},
                character2: {},
                menuSoundEffectActivation: new Audio('/sounds/fx/fx-menu-activation.wav'),
                menuSoundEffectConfirm: new Audio('/sounds/fx/fx-confirm.wav'),
                menuSoundEffectCancel: new Audio('/sounds/fx/fx-cancel.wav'),
                soundScape: new Audio('/sounds/splice-soundscape.wav')
            }
        },
        methods: {
            playSound: function() {
                this.menuSoundEffectActivation.play()
            }
        },
        mounted() {
            setTimeout(() => {
                const playPromise = this.soundScape.play();

                if(playPromise !== null){
                    playPromise.then(() => {
                    this.soundScape.volume = .02

                    }),
                    playPromise.catch(() => {
                        playPromise.play();
                        this.soundScape.volume = .02
                    })
                }
            }, 500)
            
        }
    }
</script>