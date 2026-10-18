import { createMascot } from './mascot.js';
// Letakkan file di: public/assets/models/titi.glb
export const loadTiti = (onProgress, reduce) => createMascot('/assets/models/titi.glb', onProgress, reduce);
