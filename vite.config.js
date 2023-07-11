import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import fs from "fs";
import path from "path";

// Function to get all files from a directory
const getFiles = (dirPath, fileList = []) => {
    fs.readdirSync(dirPath).forEach((file) => {
        const absolutePath = path.join(dirPath, file);
        if (fs.statSync(absolutePath).isDirectory()) {
            fileList = getFiles(absolutePath, fileList);
        } else {
            fileList.push(absolutePath);
        }
    });
    return fileList;
};

// Get all .scss and .js files
const files = getFiles("resources").filter(
    (file) => file.endsWith(".scss") || file.endsWith(".js")
);
export default defineConfig({
    plugins: [
        laravel({
            input: files,
            refresh: true,
        }),
    ],
});
