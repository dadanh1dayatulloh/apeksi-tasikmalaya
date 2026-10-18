import { PerspectiveCamera } from 'three';

export const CAM_Z = 8;
export function createCamera() {
    const cam = new PerspectiveCamera(35, innerWidth / innerHeight, 0.1, 50);
    cam.position.set(0, 0, CAM_Z);
    return cam;
}
/** Setengah lebar dunia di bidang z=0, dipakai untuk menaruh karakter relatif layar. */
export const halfWidth = (cam) => Math.tan((cam.fov * Math.PI) / 360) * CAM_Z * cam.aspect;
