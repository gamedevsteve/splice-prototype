<template>
    <div class="character-select">
        <div class="character-pane">
            <div class="character-portrait">
                <div class="frame">
                </div>
            </div>
        </div>
        <div class="selection-wrapper">
            <div class="stat-block frame">
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-bar-inner" :style="{height: selectedCharacter.health * 10 + '%'}">
                        </div>
                    </div>
                    <div class="stat-key">
                        Health
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-bar-inner" :style="{height: selectedCharacter.strength * 10 + '%'}">
                        </div>
                    </div>
                    <div class="stat-key">
                        Strength
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-bar-inner" :style="{height: selectedCharacter.defense * 10 + '%'}">
                        </div>
                    </div>
                    <div class="stat-key">
                        Defense
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-bar">
                        <div class="stat-bar-inner" :style="{height: selectedCharacter.speed * 10 + '%'}">
                        </div>
                    </div>
                    <div class="stat-key">
                        Speed
                    </div>
                </div>
            </div>
            <div class="character-wrapper">
                <div class="character" v-for="character in characters" :key="character.name" style="">
                    <button class="character-frame frame" @mouseover="setSelectedCharacter(character)" @click="confirmCharacter(character)">
                        <span class="name">{{ character.name }}</span>
                    </button>
                </div>
                        
            </div>
        </div>
        <div class="character-pane">
            <div class="character-portrait">
                <div class="frame">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
        export default {
        data: function() {
            return {
                characters: [],
                selectedCharacter: {
                    name: '',
                    weakness: [],
                    strength: [],
                    moves: [],
                    speed: 0,
                    strength: 0,
                    defense: 0,
                    health: 0
                },
            }
        },
        methods: {
            setSelectedCharacter: function(character) {
                this.selectedCharacter = character
                this.$parent.menuSoundEffectActivation.play()
            },
            confirmCharacter: function(character) {
                this.$parent.menuSoundEffectConfirm.play()
            }
        },
        mounted() {
            this.characters = [
                {
                    name: 'Gorilla',
                    weakness: [],
                    strength: [],
                    moves: [],
                    speed: 2,
                    strength: 9,
                    defense: 6,
                    health: 3
                },
                {
                    name: 'Alligator',
                    weakness: [],
                    strength: [],
                    moves: [],
                    speed: 3,
                    strength: 7,
                    defense: 5,
                    health: 5
                },
                {
                    name: 'Crane',
                    weakness: [],
                    strength: [],
                    moves: [],
                    speed: 8,
                    strength: 5,
                    defense: 2,
                    health: 5
                },
                {
                    name: 'Armadillo',
                    weakness: [],
                    strength: [],
                    moves: [],
                    speed: 3,
                    strength: 4,
                    defense: 9,
                    health: 4
                },
            ]
        }
    }
</script>