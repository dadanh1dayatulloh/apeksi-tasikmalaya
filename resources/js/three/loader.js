import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { DRACOLoader } from 'three/examples/jsm/loaders/DRACOLoader.js';

// Decoder Draco dimuat dari CDN Google; hanya dipakai jika GLB dikompres Draco.
const draco = new DRACOLoader().setDecoderPath('https://www.gstatic.com/draco/versioned/decoders/1.5.7/');
const gltf = new GLTFLoader().setDRACOLoader(draco);

/** Muat satu GLB dengan progres 0..1. Reject jika file tidak ada / rusak. */
export function loadGLB(url, onProgress) {
    return new Promise((resolve, reject) => {
        gltf.load(
            url,
            resolve,
            (e) => e.lengthComputable && onProgress?.(e.loaded / e.total),
            reject,
        );
    });
}
