import './bootstrap';

//Võimaldab samuti pildid buildi ajal laadida bootsrap cachesse
import.meta.glob(['../images/**'], { eager: true });