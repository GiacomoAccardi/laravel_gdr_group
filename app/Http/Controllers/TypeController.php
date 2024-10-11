<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Classinfo;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('types.partials.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type  $type)
    {

        $classinfo = [
            new Classinfo(1, 'Barbaro', 'https://cdn0.iconfinder.com/data/icons/equipments-and-item-fantasy-game/600/halberd_warrior_axe_war_fantasy_medieval_long_knight_weapon_arms_rpg-256.png', 'Il Barbaro è un guerriero feroce che incarna forza bruta e furia primordiale. Cresciuto nelle terre selvagge, combatte senza paura, infliggendo colpi devastanti e ignorando il dolore, facendo della sua rabbia la sua arma più potente.'),
            new Classinfo(2, 'Bardo', 'https://cdn2.iconfinder.com/data/icons/rpg-fantasy-game-basic-ui/512/game_ui_bag_item_money_sack-256.png', 'Il Bardo è un maestro delle arti e della magia, capace di ispirare alleati e confondere i nemici con musica e parole. Abile con strumenti e incantesimi, usa il potere della creatività per incantare, supportare e manipolare il campo di battagl'),
            new Classinfo(3, 'Chierico', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/light_glow_shiny_bright_shine_glitter_glare_rpg_magic_skill_ability_spell_fantasy_sun-256.png', 'Il Chierico è un devoto servitore divino, capace di curare ferite e lanciare potenti incantesimi sacri. Protettore dei suoi compagni, unisce fede e potere magico per combattere il male e difendere gli ideali della sua divinità.'),
            new Classinfo(4, 'Druido', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/plant_leaf_life_nature_green_rpg_magic_skill_ability_spell_fantasy-256.png', 'Il Druido è un custode della natura, capace di controllare le forze elementali e trasformarsi in animali. Con la sua magia selvaggia, protegge l’equilibrio naturale, curando alleati e scatenando la furia della terra contro i nemici.'), 
            new Classinfo(5, 'Fighter', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/martial_karate_fighter_practice_fight_combat_strong_arts_strength_judo_taekwondo_master_rpg_class_fist-256.png', 'Il Fighter è un guerriero esperto in combattimento, abile con una varietà di armi e tecniche. Grazie alla sua versatilità e alla resistenza, affronta qualsiasi avversario sul campo di battaglia, padroneggiando sia l’attacco che la difesa con strategia e determinazione.'), 
            new Classinfo(6, 'Monaco', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/attack_karate_practice_martial_fighter_training_fight_judo_strong_combat_strength-512.png', 'Il Monaco è un guerriero spirituale che unisce abilità marziali e disciplina interiore. Allenato nel combattimento corpo a corpo e nelle arti misteriose, usa la sua agilità e il suo equilibrio per sconfiggere i nemici, attingendo a poteri mistici per migliorare le proprie capacità.'),
            new Classinfo(7, 'Paladino', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/rpg_knight_fantasy_medieval_soldier_battle_shield_war_guard-256.png', "Il Paladino è un guerriero sacro che difende la giustizia e combatte il male. Armato di fede e spada, incarna l'onore e la rettitudine, utilizzando poteri divini per curare alleati e infliggere danni ai nemici, ispirando coraggio e determinazione nel cuore di chi lo circonda."),
            new ClassInfo(8, 'Ranger', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/archer_arrow_bow_archery_aim_accuracy_rpg_game_class-256.png', 'Il Ranger è un esperto esploratore e cacciatore, abile nell’uso dell’arco e delle armi da mischia. Conosce bene la natura e le sue insidie, navigando senza sforzo tra boschi e terre selvagge. Capace di seguire tracce e evocare animali, è un guerriero astuto e letale, sempre pronto a difendere il suo territorio.' ), 
            new Classinfo(9, 'Rogue', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/skull_knife_skeleton_scary_dead_kill_rpg_game_skill_ability_dagger-256.png', "Il Rogue è un abile ladro e manipolatore, esperto nell'arte della furtività e dell'inganno. Con riflessi rapidi e astuzia, si muove nell'ombra per colpire i nemici con precisione letale. Utilizza trappole, pugnali e la sua intelligenza per superare ostacoli e ottenere vantaggi, rendendolo un alleato prezioso e un avversario temibile."), 
            new Classinfo(10, 'Sorcerer',  'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/magician_magic_wizard_magical_book_wisdom_sorcerer_fantasy_medieval_spell_witchcraft_mage_class_rpg_wand-256.png', "Il Sorcerer è un incantatore innato che canalizza potere magico attraverso il proprio sangue e la propria volontà. Con un'energia che scorre naturalmente dentro di lui, lancia incantesimi devastanti e manipola le forze arcane senza la necessità di lunghi rituali. Caratterizzato da una personalità carismatica e un legame profondo con la magia, il Sorcerer è un maestro della distruzione e della meraviglia."), 
            new Classinfo(11, 'Warlock', 'https://cdn1.iconfinder.com/data/icons/classes-and-magic-abilities-fantasy-game/600/necromancer_dark_fantasy_horror_evil_magic_creepy_halloween_witch_skull_death_rpg_class-256.png', "Il Warlock è un incantatore enigmatico che ha stretto un patto con una potente entità, ottenendo poteri arcani in cambio di servitù. Con la capacità di lanciare incantesimi unici e invocare forze oscure, il Warlock è abile nel manipolare la magia e nel controllare i segreti del mondo. Affascinante e misterioso, usa la sua astuzia e il suo carisma per ottenere ciò che desidera, camminando sempre sul filo tra il potere e il pericolo."),
            new Classinfo(12, 'Wizard', 'https://cdn0.iconfinder.com/data/icons/equipments-and-item-fantasy-game/600/book_skill_star_page_knowledge_rpg_game_interface_ui_ability-256.png', "Il Wizard è un maestro della magia che ha dedicato la propria vita allo studio delle arti arcane. Con un vasto repertorio di incantesimi e una profonda conoscenza dei misteri magici, il Wizard può evocare potenti incantesimi, manipolare elementi e risolvere enigmi complessi. Armato di un libro degli incantesimi e di un bastone, è un esperto stratega sul campo di battaglia, utilizzando la sua intelligenza e la sua saggezza per affrontare qualsiasi avversità."), 
        ];

        $classinfoItem = collect($classinfo)->firstWhere('id', $type->id);

        return view('types.partials.show', compact('type', 'classinfoItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeRequest  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeRequest $request, Type $type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        //
    }
}
