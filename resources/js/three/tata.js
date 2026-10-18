import { createMascot } from './mascot.js';
// Letakkan file di: public/assets/models/tata.glb
export const loadTata = (onProgress, reduce) => createMascot('/assets/models/tata.glb', onProgress, reduce);
